<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('depart_station_id')->references('id')->on('stations');
            $table->foreignId('arrive_station_id')->references('id')->on('stations');
            $table->string('distance'); // In meters
            $table->string('estimated_travel_time'); // In minutes
            $table->foreignId('transit_route_id')->references('id')->on('transit_routes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segments');
    }
};
