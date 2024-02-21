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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('move_in')->nullable();
            $table->string('move_from')->nullable();
            $table->string('tenants')->nullable();
            $table->string('pets')->nullable();
            $table->string('drugs')->nullable();
            $table->string('profession')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
