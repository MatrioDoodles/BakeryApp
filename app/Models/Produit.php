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
        'prix'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Commande');
    }
}
