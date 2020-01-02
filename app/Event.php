<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nom' ,  
        'description',
        'nbr_interesse',  
        'nbr_participe',
        'organisateur',
        'adresse',
        'date_debut',
        'duree',
    ];
}
