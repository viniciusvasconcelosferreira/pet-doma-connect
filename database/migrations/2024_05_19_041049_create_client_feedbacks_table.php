<?php

use Database\Seeders\ClientFeedbacksSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_feedbacks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating')->unsigned()->default(0);
            $table->string('title', 70)->nullable();
            $table->text('comments')->nullable();
            $table->string('pet_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('photo')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        Artisan::call('db:seed', array('--class' => ClientFeedbacksSeeder::class));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_feedbacks');
    }
};
