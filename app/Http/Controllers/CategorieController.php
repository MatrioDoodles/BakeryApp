<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Categorie;
use App\Produit;

class CategorieController extends Controller
{
    public function create(Request $request)
    {   
        $cat = true;
        $categorie            = new Categorie();
        $categorie->name      = Input::get('name');
        $categorie->save();
        return redirect('ReadCategorie');

    }

    public function show()
    {
            $produits = Produit::all();
            $cat = true;
            return view('produits', compact('produits','cat'));

    }
    public function edit(Request $request)
    {   
        $categorie            = Categorie::find($request->categorie);
        $categorie->name      = Input::get('name');
        $categorie->save();
        return redirect('ReadCategorie');
    }

    public function destroy()
    {   $cat = true;
        $categorie = Categorie::find($request->categorie);
        $categorie->forceDelete();
        return redirect('ReadCategorie');
    }
}
