<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->bigInteger('attendance_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('status');
            $table->timestamps();

            $table->primary(['attendance_id', 'user_id']);
    
            $table->foreign('attendance_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presences');
    }
}
