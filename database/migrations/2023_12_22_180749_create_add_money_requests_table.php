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
        Schema::create('add_money_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->string('payment_method');
            $table->string('sent_from');
            $table->float('amount', 10, 2);
            $table->string('transaction_id');
            $table->tinyInteger('status')->default(0)->comment('0=Pending,1=Added,2=Failed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_money_requests');
    }
};
