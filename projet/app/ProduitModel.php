<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitModel extends Model
{
    //

    protected $table='produit';
	protected $fillable=[
		'designation',
		'prix_unitaire',
		
		
	];

    
}
