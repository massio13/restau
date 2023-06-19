<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PlatController extends Controller
{
    public function menu() {
        return view('plat.menu');
    }
    public function frmPlat() {
        $categories = \App\Models\Categorie::all();
        $chefs = \App\Models\Chef::all();
        return view('plat.creerplat', ['listcat' => $categories, 'chefs' => $chefs]);
    }
    public function addPlat() {
        $plat = \App\Models\Plat::create([
            'nom' => request('libelle'),
            'prix' => request('prix'),
            'composition' => request('composition'),
            'photo' => 'menu-item-1.png',
            'categorie_id' => request('idCat'),
        ]);
        $plat->save();
        $plat->chefs()->sync(request('idChef'));
        $message = 'le plat { $plat->id } - { $plat->libelle } a été cree avec success'; 
        return redirect()->route('plat.frm')->with('success',$message);
    }
    public function listerPlat() {
        $plats = \App\Models\Plat::all();
        $chefs = \App\Models\Chef::all();
        return view('plat.listerplats', ['plats' => $plats, 'chefs' => $chefs]);
    }
}
