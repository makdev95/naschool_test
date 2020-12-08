<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clas_profs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('professeurs_id');
            $table->foreignId('classes_id');
            $table->foreignId('matieres_id');
            $table->bigInteger('montant');
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
        Schema::dropIfExists('clas_profs');
    }
}
