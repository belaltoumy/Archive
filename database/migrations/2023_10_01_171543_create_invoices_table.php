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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code')->nullable()->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->dateTime('date');
            $table->float('selling_price'); // سعر الشراء
            $table->float('Purchasing_price');// سعر المبيع
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
