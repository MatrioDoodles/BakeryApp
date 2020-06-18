<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Produit;

class ProduitController extends Controller
{


    public function rechercher(Request $request)
    {   
        $searchTerm = Input::get('mot');
        $produits= Produit::where('libelle', 'LIKE', "%$searchTerm%")->get();
        return view('catalogueProd', compact('produits'));

    }


    public function create(Request $request)
    {   
        $produit = new Produit();
        $produit->libelle      = Input::get('libelle');
        $produit->description  = Input::get('description');
        $produit->prix         = Input::get('prix');
        $produit->categorie_id = $request->categorie;
        $produit->picture = null;
        $produit->save();
        $file = $request->photo;
        if($file != null){
        $imageName = 'Produit'.$produit->id . '.' .
            $file->getClientOriginalExtension();
        $produit->picture = $imageName;
        $produit->save();
        $file->move(
            base_path() . '/public/images/produits/', $imageName
        );}
        $produit->save();
        return redirect('ReadProduit');

    }

    public function show()
    {
            $produits = Produit::all();
            $cat = false;
            return view('produits', compact('produits','cat'));

    }

    public function catalogue()
    {
            $produits = Produit::all();
            return view('catalogueProd', compact('produits'));

    }


    public function edit(Request $request)
    {   
        
        $produit               = Produit::find(Input::get('id'));
        $produit->libelle      = Input::get('libelle');
        $produit->description  = Input::get('description');
        $produit->prix         = Input::get('prix');
        $produit->categorie_id = $request->categorie;
        $produit->save();
        $file = $request->photo;
        if($file != null){
        $imageName = 'Produit'.$produit->id . '.' .
            $file->getClientOriginalExtension();
        $produit->picture = $imageName;
        $produit->save();
        $file->move(
            base_path() . '/public/images/produits/', $imageName
        );}
        $produit->save();
        return redirect('ReadProduit');
    }

    public function destroy()
    {$produit = Produit::find(Input::get('id'));
        $produit->forceDelete();
        return redirect('ReadProduit');
    }

    public function Multidestroy(Request $request)
    {  $ids = $request->id  ;
       Produit::whereIn('id',$ids)->delete();
    }
}
