<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $dates = [
		'date_commande'
	];


public function user()
{
	return $this->belongsTo('App\User');
}

public function produits()
{
	return $this->belongsToMany('App\Produit');
}

}