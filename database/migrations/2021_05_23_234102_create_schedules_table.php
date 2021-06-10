<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('classroom_id')->unsigned();
            $table->smallInteger('day');
            $table->smallInteger('time');
            $table->timestamps();

            $table->primary(['subject_id', 'classroom_id']);
    
            $table->foreign('subject_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('classroom_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
