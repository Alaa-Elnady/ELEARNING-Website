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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('job');
            $table->string('jobStatus');
            $table->string('phoneNumber');
            $table->string('email')->unique()->nullable(false);
            $table->string('address');
            $table->string('facebookUrl');
            $table->string('instagramUrl');
            $table->string('linkedinUrl');
            $table->longText('introduction');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
