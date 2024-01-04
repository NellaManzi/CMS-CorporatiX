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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('head_icon')->default('setting_images/icon.png');

            $table->string('header_logo_url')->default('setting_images/header_image.png');
            $table->string('header_name')->nullable();
            $table->string('header_title')->nullable();
            $table->string('header_description')->nullable();

            $table->string('section_title')->nullable();
            $table->string('section_logo_url')->default('setting_images/logo.png');
            $table->string('section_subtitle')->nullable();
            $table->text('section_description')->nullable();

            $table->longText('section_about')->nullable();

            $table->string('footer_phone')->nullable();
            $table->string('footer_email')->nullable();

            $table->boolean('deletable')->default(false);
            $table->enum('status', [
                'maintenance',
                'published'
            ])->default('published');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
