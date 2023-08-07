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
        Schema::create('liter_balances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('fuel_type_id');
            $table->float('balance_volume');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liter_balances');
    }
};
