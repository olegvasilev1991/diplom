<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_card')->unsigned()->nullable();

            $table->integer('turn_id')->unsigned();
            $table->foreign('turn_id')->references('id')->on('tournaments')->onDelete('cascade');

            $table->char('first_name');
            $table->char('last_name');
            $table->date('birth');
            $table->char('phone',50);
            $table->char('email',50);
            $table->boolean('sex');
            $table->char('photo',50)->nullable();
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
        Schema::dropIfExists('participants');
    }
}
