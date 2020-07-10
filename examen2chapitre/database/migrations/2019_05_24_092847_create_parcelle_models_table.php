<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelle', function (Blueprint $table) {
              $table->increments('id');
            $table->integer('superficie');
            $table->string('adresse');
            $table->string('ilot');
             $table->integer('personne_id')->unsigned()->index();
              $table->foreign('personne_id')->references('id')->on('personne')->onDeletes('cascade');
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
        Schema::dropIfExists('parcelle');
    }
}
