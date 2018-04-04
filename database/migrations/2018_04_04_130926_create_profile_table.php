<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profielen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gebruikersnaam');
            $table->string('email');
            $table->string('geboortedatum');
            $table->string('foto');
            $table->string('werkstatus');
            $table->text('biografie');
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
        schema::drop('profielen');
    }
}
