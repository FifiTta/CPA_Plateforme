<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Compte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client',
        'prenom_client',
        'solde',

    ];
    public function client(){
        return $this->hasOne(Compte::class);
    }
}

