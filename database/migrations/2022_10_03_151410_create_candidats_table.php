<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            
            $table->Increments('id');
            $table->integer('CNI');
            $table->string('prenom');
            $table->string('nom');
            $table->date('datenaissance');
            $table->string('commune');
            $table->string('nomparti');
            $table->string('identification');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
