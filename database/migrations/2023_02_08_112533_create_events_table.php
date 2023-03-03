<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->string('place');
            $table->string('type');
            $table->string('description')->nullable();
            $table->string('locker_room');
            $table->foreignId('team_id')
                ->nullable()
                ->constrained('teams')
                ->nullOnDelete();
            $table->boolean('underline')->nullable()->default(false);
            $table->dateTime('second_datetime')->nullable();
            $table->string('second_place')->nullable();
            $table->string('second_type')->nullable();
            $table->string('second_description')->nullable();
            $table->string('second_locker_room')->nullable();
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
        Schema::dropIfExists('events');
    }
}
