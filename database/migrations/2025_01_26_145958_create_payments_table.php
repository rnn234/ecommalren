<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->unsignedBigInteger('user_id')->nullable(); // Hubungan dengan tabel users (opsional)
            $table->string('payment_type'); // Jenis pembayaran: credit_card, bank_transfer, dll
            $table->string('status')->default('pending'); // pending, success, failed
            $table->decimal('amount', 10, 2); // Jumlah pembayaran
            $table->string('transaction_id')->nullable(); // ID dari Midtrans
            $table->text('payload')->nullable(); // Data JSON yang disimpan (dari Midtrans callback)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
}
