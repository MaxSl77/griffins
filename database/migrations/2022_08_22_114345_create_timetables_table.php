<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{

    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->text('start_at');
            $table->text("thumbnail")->nullable();
//            $table->string('day_of_the_week');
//            $table->time('time');
//            $table->string('place');
//            $table->string('type');
//            $table->string('teams');
//            $table->integer('locker_room')->nullable();
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
        Schema::dropIfExists('timetables');
    }
}
