<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->integer('distance_Parcour');
            $table->integer('Prix_Parcour');
            $table->integer('nbr_place');
            $table->time('time_depart');
            $table->time('arrive_time');
            $table->date('depart_date');
            $table->string('duree');
            $table->foreignId('depart_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('arrive_id')->constrained('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
