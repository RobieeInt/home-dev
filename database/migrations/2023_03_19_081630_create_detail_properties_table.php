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
        Schema::create('detail_properties', function (Blueprint $table) {
            $table->id();
            //has homepropertyId
            $table->foreignId('home_property_id')->constrained()->onDelete('cascade');
            $table->string('type')->nullable();
            $table->string('bedroom')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('garage')->nullable();
            $table->string('area')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->nullable();
            $table->string('video')->nullable();
            $table->string('map')->nullable();
            //double type latitude longitud
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('year')->nullable();
            $table->string('roof')->nullable();
            $table->string('floor')->nullable();
            $table->string('heating')->nullable();
            $table->string('image_plan')->nullable();
            $table->string('land_area')->nullable();
            $table->string('building_area')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_properties');
    }
};
