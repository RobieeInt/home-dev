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
        Schema::create('amenities_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_property_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['interior', 'exterior', 'community']);
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities_properties');
    }
};
