<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    // Si vous avez des colonnes spécifiques que vous souhaitez mass-associer
    protected $fillable = [
        'matricule',
        'note',
        'note',
        'squence',
    ];
}
