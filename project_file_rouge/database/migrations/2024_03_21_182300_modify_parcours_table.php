<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyParcoursTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('parcours', function (Blueprint $table) {
            $table->string('image');
            $table->foreignId('depart_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('arrive_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('parcours', function (Blueprint $table) {
            Schema::dropIfExists('parcours');
        });
    }
}
