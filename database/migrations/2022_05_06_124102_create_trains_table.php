<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('agency', 100);
            $table->smallInteger('number_of_carriages')->nullable();
            $table->string('departure_city', 50);
            $table->string('arrival_city', 50);
            $table->date('departure_time');
            $table->boolean('in_time');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
