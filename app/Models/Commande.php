<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $dates = [
		'date_commande',
		'date_livraison'
	];

	protected $fillable = [
        'adress',
        'total',
        'user_id'
    ];


public function user()
{
	return $this->belongsTo('App\User');
}

public function produits()
{
	return $this->belongsToMany('App\Produit','produit_commande', 'commande_id', 'produit_id')->withPivot('quantite');
}

}