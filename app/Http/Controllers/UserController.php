<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function inscription(Request $request)
    {
        $user = new User();
        $user->name        = Input::get('nom');
        $user->surname     = Input::get('prenom');
        $user->email       = Input::get('email');
        $user->adress      = Input::get('adresse');
        $user->phone       = Input::get('tel');
        $user->discount    = 0;
        $user->password    = Hash::make(Input::get('password'));
        $user->role_id   = 2;
        $user->save();
        return redirect('/');

    }


    public function create(Request $request)
    {   
        $user = new User();
        $user->name        = Input::get('nom');
        $user->surname     = Input::get('prenom');
        $user->email       = Input::get('email');
        $user->adress      = Input::get('adresse');
        $user->phone       = Input::get('tel');
        $user->discount    = 10;
        $user->password    = Hash::make(Input::get('password'));
        if(Input::get('role')  == 'A') $user->role_id     = 1;
        if(Input::get('role')  == 'C') $user->role_id     = 2;
        $user->save();
        return redirect('ReadUtilisateur');

    }

    public function show()
    {
            $users = user::all();
            return view('utilisateurs', compact('users'));

    }


    public function edit(Request $request)
    {$user = user::find(Input::get('id'));
        $user->name        = Input::get('nom');
        $user->surname     = Input::get('prenom');
        $user->email       = Input::get('email');
        $user->adress      = Input::get('adresse');
        $user->phone       = Input::get('tel');
        $user->discount    = 10;
        if(Input::get('role')  == 'A') $user->role_id     = 1;
        if(Input::get('role')  == 'C') $user->role_id     = 2;
        if($user->password != null){
        $user->password    = Hash::make(Input::get('password'));}
        $user->save();
        return redirect('ReadUtilisateur');
    }

    public function destroy()
    {$user = user::find(Input::get('id'));
        $user->forceDelete();
        return redirect('ReadUtilisateur');
    }

    public function Multidestroy(Request $request)
    {  $ids = $request->id  ;
       User::whereIn('id',$ids)->delete();
    }
}
