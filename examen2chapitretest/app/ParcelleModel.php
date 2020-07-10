<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelleModel extends Model
{
    //

    protected $table='parcelle';
	protected $fillable=[
		'superficie',
		'adresse',
		'ilot',
		'personne_id',
		
		
	];

    
}
