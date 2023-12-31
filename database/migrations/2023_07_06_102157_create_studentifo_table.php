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
        Schema::create('studentifo', function (Blueprint $table) {
            $table->id();
            $table->string("Firstname");
            $table->string("Lastname");
            $table->string("Address");
            $table->string("Mobile");
            $table->string("Email");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentifo');
    }
};
