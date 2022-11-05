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
            $table->text('month');
            $table->text('date');
            $table->text('place')->nullable();
            $table->text('championship')->nullable();
            $table->text('type')->nullable();
            $table->text('start_at')->nullable();
            $table->text('teams')->nullable();
            $table->text('locker_room')->nullable();
            $table->text('place_2')->nullable();
            $table->text('championship_2')->nullable();
            $table->text('type_2')->nullable();
            $table->text('start_at_2')->nullable();
            $table->text('teams_2')->nullable();
            $table->text('locker_room_2')->nullable();
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
