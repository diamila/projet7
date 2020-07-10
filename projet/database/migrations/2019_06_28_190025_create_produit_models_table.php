
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //Blueprint: utilisé pour définir la nouvelle table:blog_models
        Schema::create('produit', function (Blueprint $table) {

            $table->increments('id');
            $table->string('designation');
            $table->string('prix_unitaire');
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
        Schema::dropIfExists('produit');
    }
}



/*
//auth
            
           
*/
















