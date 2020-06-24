<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'libelle',
        'picture',
        'description',
        'categorie_id',
        'prix',
        'quantite'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commande','produit_commande', 'produit_id', 'commande_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','favoris', 'produit_id', 'user_id');
    }

}
