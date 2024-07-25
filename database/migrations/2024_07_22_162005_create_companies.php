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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('place_id')->constrained('places')->onDelete('cascade');
            $table->string('company_name');
            $table->string('website');
            $table->integer('emploies_num');
            $table->string('description');
            $table->integer('phone');
            $table->string('country_code_phone');
            $table->string('work_days');
            $table->string('profile_images');
            $table->string('banner_image');
            $table->timestamps();
            $table->foreignId('social_media_id')->constrained('social_media')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
