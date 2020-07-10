<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcernerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerner', function (Blueprint $table) {
           $table->string('quantite_commande');
            $table->timestamps(); 

            $table->integer('id_commande')->unsigned()->index();
            $table->foreign('id_commande')->references('id')->on('commande')->onDeletes('cascade');

            $table->integer('produit_id')->unsigned()->index();
            $table->foreign('produit_id')->references('id')->on('produit')->onDeletes('cascade');

             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerner');
    }
}
