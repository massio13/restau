<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
    ];
    // OneToMany
    public function plats() {
        return $this->hasMany(Plat::class);
    }
}
