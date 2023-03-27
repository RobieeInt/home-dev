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
        Schema::create('home_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->string('address');
            $table->foreignId('unit_id')->constrained('master_units');
            $table->foreignId('city_id')->constrained('master_cities');
            $table->foreignId('province_id')->constrained('master_provinces');
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_popular')->default(false);


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_properties');
    }
};
