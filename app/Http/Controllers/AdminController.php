<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::whereIn('role', ['seller', 'customer'])
        ->orderByRaw("
            CASE role
                WHEN 'seller' THEN 1
                WHEN 'customer' THEN 2
                ELSE 4
            END
        ")
        ->orderBy('name')
        ->get();

    return view('admin.index', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:32',
            'role' => 'required|in:seller,customer',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function show(User $admin)
    {
        //
    }

    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, User $admin)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin->id,
            'password' => 'required|min:6|max:32',
            'role' => 'required|in:seller,customer',
        ]);

        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin')->with('success', 'Data pengguna diperbarui.');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Pengguna dihapus.');
    }
}
