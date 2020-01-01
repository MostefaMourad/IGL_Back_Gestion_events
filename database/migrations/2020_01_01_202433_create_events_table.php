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
            $table->increments('id');
            $table->string('nom')->unique();
            $table->text('description');
            $table->integer('nbr_interesse')->default(0);
            $table->integer('nbr_participe')->default(0);
            $table->string('organisateur');
            $table->string('adresse')->nullable();
            $table->date('date_debut')->nullable();
            $table->string('duree')->nullable();  
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
