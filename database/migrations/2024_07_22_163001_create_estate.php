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
        Schema::create('estate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->foreignId('place_id')->constrained('places')->onDelete('cascade');
            $table->integer('phone');
            $table->string('country_code_phone');
            $table->string('space_of_estate');
            $table->string('price_of_meter');
            $table->string('rent_kind');
            $table->boolean('is_furnished');
            $table->integer('floor');
            $table->integer('num_of_bedrooms');
            $table->integer('num_of_livingrooms');
            $table->integer('num_of_receptions');
            $table->integer('num_of_bathrooms');
            $table->integer('num_of_balconies');
            $table->integer('num_of_kitchens');
            $table->string('status');
            $table->string('type');
            $table->string('kind');
            $table->string('description');
            $table->timestamps();
            $table->foreignId('social_media_id')->constrained('social_media')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate');
    }
};
