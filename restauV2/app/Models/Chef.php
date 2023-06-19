<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'photo',
    ];

    public function plats(){
        return $this->belongsToMany(Plat::class,'plat_chef');
    }

    
}
