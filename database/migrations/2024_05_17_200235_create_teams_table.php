<?php

use Database\Seeders\TeamSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('function')->nullable();
            $table->json('social_media')->nullable();
            $table->string('photo')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed', array('--class' => TeamSeeder::class));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
