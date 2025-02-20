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
        Schema::create('real_estate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estate_id')->constrained('estate')->onDelete('cascade');
            $table->string('price');
            $table->integer('real_number');
            $table->date('date_of_buiild');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('real_estate');
    }
};
