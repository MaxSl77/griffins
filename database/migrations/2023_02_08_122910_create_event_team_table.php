<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTeamTable extends Migration
{

    public function up()
    {
        Schema::create('event_team', function (Blueprint $table) {
            $table->foreignId('event_id')->constrained("events")->cascadeOnDelete();
            $table->foreignId('team_id')->constrained('teams')->cascadeOnDelete();
        });
    }


    public function down()
    {
        Schema::dropIfExists('event_team');
    }
}
