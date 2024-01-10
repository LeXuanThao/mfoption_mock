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
        Schema::create('symbols', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique();
            $table->string('name');
            $table->string('short_name');
            $table->string('security_type')->nullable();
            $table->enum('type', ['index', 'option', 'future'])->default('other');
            $table->date('trade_start')->nullable();
            $table->date('trade_end')->nullable();
            $table->date('deriv_month')->nullable();
            $table->integer('trade_unit');
            $table->string('underlyer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symbols');
    }
};