<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNieuwspostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nieuwsposts', function (Blueprint $table) {
            $table->increments('nieuws_id');
            $table->string('titel');
            $table->text('content');
            $table->text('foto');
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
        //
    }
}
