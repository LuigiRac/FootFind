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
        Schema::create('foot_matches', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('city');
            $table->string('province');
            $table->string('field_name');
            $table->enum('field_type', ['5', '7', '9', '11']); // tipo campo
            $table->string('address');
            $table->dateTime('date_time');
            $table->enum('match_type', ['open', 'closed'])->default('open');
            $table->integer('max_players');        // calcolato in base al field_type
            $table->integer('needed_players')->nullable(); // solo se closed
            $table->string('role_needed')->nullable();     // solo se closed e needed_players < max_players
            $table->boolean('seeking_opponent')->default(false); // solo se needed_players = max_players
            $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foot_matches');
    }
};
