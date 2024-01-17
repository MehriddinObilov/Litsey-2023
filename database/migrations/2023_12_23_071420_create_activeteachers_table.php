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
        Schema::create('activeteachers', function (Blueprint $table) {
            $table->id();
            $table->string('select');
            $table->string('title');
            $table->string('tel')->nullable();
            $table->string('telegram')->nullable();
            $table->text('text');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activeteachers');
    }
};
