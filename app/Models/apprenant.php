<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprenant extends Model
{
    use HasFactory;
   
    protected $fillable=[
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'mois'

    ];

    public function paiement(){
        return $this->BelongsTo(paiement::class);
        
     }
}
