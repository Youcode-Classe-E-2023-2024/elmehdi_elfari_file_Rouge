<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcoursTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('parcours', function (Blueprint $table) {
            $table->id();
            $table->integer('longeur_Parcour');
            $table->integer('Prix_Parcour');
            $table->integer('nbr_place');
            $table->time('time_depart');
            $table->time('arrive_time');
            $table->date('depart_date');
            $table->date('arrive_date');
            $table->string('duree');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('parcours');
    }
}
