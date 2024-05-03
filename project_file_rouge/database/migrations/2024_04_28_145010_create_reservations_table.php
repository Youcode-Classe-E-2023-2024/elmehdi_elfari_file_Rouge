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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('parcour_id')->constrained('parcours')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('number_de_reservation');
            $table->enum( 'Classes' ,['premier', 'deuxieme']);
            $table->date('date');
            $table->unique(['user_id','parcour_id','date']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
