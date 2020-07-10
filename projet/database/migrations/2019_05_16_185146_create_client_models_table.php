
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //Blueprint: utilisé pour définir la nouvelle table:blog_models
        Schema::create('client', function (Blueprint $table) {

            $table->increments('id');
            $table->string('cni');
            $table->string('prenom');
            $table->string('nom');
            $table->DateTime('date_naiss');
            $table->string('lieu_naissance');
             $table->string('tel');
             
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
        Schema::dropIfExists('client');
    }
}



/*
//auth
            
           
*/
















