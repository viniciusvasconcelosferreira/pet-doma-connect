<?php

use Database\Seeders\ContactInformationSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_information', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->nullable();
            $table->string('cell_phone_number')->nullable();
            $table->boolean('phone_is_whatsapp')->default(false);
            $table->boolean('cell_phone_is_whatsapp')->default(false);
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->json('operating_hours')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Artisan::call('db:seed', array('--class' => ContactInformationSeeder::class));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_information');
    }
};
