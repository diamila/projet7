<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    //

    protected $table='client';
	protected $fillable=[
		'cni',
		'prenom',
		'nom',
		'date_naiss',
		'lieu_naissance',
		'tel',
		
	];

    
}
