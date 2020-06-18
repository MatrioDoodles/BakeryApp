<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name',
        'picture'
    ];

    public function produit()
    {
        return $this->hasMany('App\Produit');
    }
}
