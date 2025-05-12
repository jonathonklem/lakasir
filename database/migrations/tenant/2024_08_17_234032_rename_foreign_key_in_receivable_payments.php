<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('receivable_payments', function (Blueprint $table) {
            $table->foreign(['receivable_id'])->references('id')->on('receivables');

            $table->foreign(['payment_method_id'])->references('id')->on('payment_methods');

            $table->foreign(['user_id'])->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receivable_payments', function (Blueprint $table) {
            $table->foreign('receivable_id', 'debt_payments_debt_id_foreign')->references('id')->on('receivables');

            $table->foreign('payment_method_id', 'debt_payments_payment_method_id_foreign')->references('id')->on('payment_methods');

            $table->foreign('user_id', 'debt_payments_user_id_foreign')->references('id')->on('users');
        });
    }
};
