<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Inscription extends Model
{
    use HasFactory,Notifiable;

    // Si vous avez des colonnes spécifiques que vous souhaitez mass-associer
    protected $fillable = [
        'nom',
        'matricule',
        'age',
        'classe',
        'montant',
        'sexe',
        'parent_phone'
    ];
}