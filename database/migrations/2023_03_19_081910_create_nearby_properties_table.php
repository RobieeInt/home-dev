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
        Schema::create('nearby_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_property_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['education', 'health & medical', 'transportation']);
            $table->string('name');
            $table->string('distance');
            $table->string('rating')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nearby_properties');
    }
};
