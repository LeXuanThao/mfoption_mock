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
        Schema::create('symbols_exchanges', function (Blueprint $table) {
            $table->foreignId('symbol_id')->constrained('symbols');
            $table->foreignId('exchange_id')->constrained('exchanges');
            $table->string('tick_size_group')->nullable();
            $table->unsignedInteger('limit_up');
            $table->unsignedInteger('limit_down');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symbols_exchanges');
    }
};
