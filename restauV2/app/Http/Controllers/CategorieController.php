<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Categorie;
use App\Http\Requests\FormCategorieRequest;

class CategorieController extends Controller
{
    public function frmCategorie() {
        // code BDD
        // dd(session()->all());
        return view('categorie.creercategorie');
    }

    public function addCategorie(FormCategorieRequest $request) {
        // enregistrer la categorie en BDD (persister)
        $categorie = \App\Models\Categorie::create([
        // $categorie = Categorie::create([
            'libelle' => request('libelle'),
            
        ]);
        // dd($categorie); // dump and die
        $categorie->save();
        $message = 'La categorie est créée : ' . $categorie->id . ' - ' . $categorie->libelle;
        return redirect()->route('categorie.frm')->with('success',$message);
    }

    public function allCategorie() {
        $categories = \App\Models\Categorie::all();
            return view(  'categorie.listercategories',
                        ['categories' => $categories]);
    }

    public function allCategoriePaginate() {
        // ::orderBy('id')->paginate(5); 
        $categories = \App\Models\Categorie::paginate(5);
            return view(  'categorie.listercategoriespaginate',
                        ['categories' => $categories]);

    }
    public function show(\App\Models\Categorie $categorie) {
        return view('categorie.show',['categorie' => $categorie]);
    }
    public function delete(\App\Models\Categorie $categorie) {
        // dd($categorie);
        $categorie->delete();
        // $message="Bravo !!! on ne peut plus manger de " . $categorie->libelle;
        $message="Bravo !!! on ne peut plus manger de {$categorie->libelle}";
        return redirect()->route('categorie.all')->with('success',$message);
    }


    public function frmUpdate(\App\Models\Categorie $categorie) {
        return view('categorie.updatecategorie',['categorie' => $categorie]);
    }
    public function update(\App\Models\Categorie $categorie) {
            // dd($categorie);
            $old = $categorie->libelle;
            $categorie->libelle=request('libelle');
            $categorie->save();
            // $message="Bravo !!! on ne peut plus manger de " . $categorie->libelle;
            $message="Bravo !!! vive le changement de { $old } en  {$categorie->libelle}";
        return redirect()->route('categorie.all')->with('success',$message);
    }    
}
