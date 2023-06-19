<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormChefRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Chef;

class ChefController extends Controller
{
    public function frmChef() {
        return view('chef.creerchef');               // resources/views/chef/creerchef.blade.php
    }
    public function addChef(): RedirectResponse | View {
        $chef = \App\Models\Chef::create([
            'nom'       => request('nom'),
            'prenom'    => request('prenom'),
            'photo'     => request('photo'),
        ]); 
        $chef->save();
        $message = 'Nous avons enregistré votre chef : '. $chef->id . ', ' . $chef->nom . ' ' . $chef->prenom; 
        return redirect()->route('chef.frm')->with('success',$message);
    }

    public function lister() : View {
        $chefs = \App\Models\Chef::all();
        return view('chef.lister',['chefs' => $chefs]);
    }

    public function delete(Chef $chef) : RedirectResponse | View {
        // dd($chef);
        $chef->delete();
        return redirect()->route('chef.liste')->with('success',"Le chef a été supprimé");
    }
}


