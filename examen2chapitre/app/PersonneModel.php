<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneModel extends Model
{
    //

    protected $table='personne';
	protected $fillable=[
		'cni',
		'prenom',
		'nom',
		'date_naiss',
		'lieu_naissance',
		'tel',
		
	];

    
}
