<?php

use Database\Seeders\AboutUsSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->json('highlighted_services')->nullable();
            $table->string('mission_title')->nullable();
            $table->string('mission_subtitle')->nullable();
            $table->string('mission_description')->nullable();
            $table->json('client_photos')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed', array('--class' => AboutUsSeeder::class));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
