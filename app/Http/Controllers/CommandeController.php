<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
Use \Carbon\Carbon;
use App\Commande;
use App\Produit;

class CommandeController extends Controller
{
    public function commander_func(Request $request)
    {   
        $commande = new Commande();
        $commande->user_id = Auth::user()->id;
        $commande->date_commande = Carbon::now();
        $commande->date_livraison = Carbon::now()->addDays(5);
        $commande->adress = Auth::user()->adress;
        $commande->total = 0;
        $commande->save();
        $nbarticle = strlen ($request->nb_article_panier);
        $total = 0;
        for($i = 1 ;$i <=  $nbarticle; $i++)
        {
            $id_prod = Input::get('id_article'.$i);
            $produit = Produit::find($id_prod);
            $qte = Input::get('qte'.$i);
            $produit->quantite = $produit->quantite-$qte ;
            $total = $total + $produit->prix*$qte;
            $commande->produits()->attach($id_prod,array('quantite' => $qte));
            
        }
        $commande->total = $total;
        $commande->save();
        return redirect('ReadCommande');

    }

    public function show(Request $request)
    {
        $commandes = Commande::all();
        return view('commandes', compact('commandes'));
    }
}
