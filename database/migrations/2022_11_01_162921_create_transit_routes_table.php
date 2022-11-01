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
        Schema::create('transit_routes', function (Blueprint $table) {
            $table->id();
            $table->string('route_name');
            $table->string('short_name')->nullable();
            $table->string('line_shape')->default('linear'); // [linear, circular, lacial]
            $table->string('vehicle_type')->default('bus'); // [Bus, Minibus, Train, Tram]
            $table->string('direction'); // [East, West, North, South, Clockwise, Anticlockwise, Inbound, Outbound]
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
        Schema::dropIfExists('transit_routes');
    }
};
