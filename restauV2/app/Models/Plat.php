<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom','prix','composition','photo','categorie_id'
    ];

    // Ajout dans le model de la FK vers Categorie
    // Ce plat appartient (belongsTo) une catégorie
    // ManyToOne    => inverse de OneToMany
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    // public function chefs(){
    //     return $this->belongsToMany(Chef::class);
    // }

    public function chefs() {
        return $this->belongsToMany(Chef::class,'plat_chef');
    }
        
}
