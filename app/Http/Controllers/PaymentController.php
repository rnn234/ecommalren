<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Generate token pembayaran
    public function createPayment(Request $request)
    {
        $request->validate([
            'order_id' => 'required|unique:payments',
            'amount' => 'required|numeric|min:0',
            'payment_type' => 'required|string',
        ]);

        $payment = Payment::create([
            'order_id' => $request->order_id,
            'amount' => $request->amount,
            'payment_type' => $request->payment_type,
            'status' => 'pending',
        ]);

        $params = [
            'transaction_details' => [
                'order_id' => $payment->order_id,
                'gross_amount' => $payment->amount,
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json(['snapToken' => $snapToken, 'payment' => $payment]);
    }

    // Callback Midtrans
    public function handleCallback(Request $request)
    {
        $payload = $request->all();

        $payment = Payment::where('order_id', $payload['order_id'])->firstOrFail();

        $payment->update([
            'status' => $payload['transaction_status'], // success, pending, failed
            'transaction_id' => $payload['transaction_id'],
            'payload' => json_encode($payload),
        ]);

        return response()->json(['message' => 'Payment updated', 'payment' => $payment]);
    }
}
