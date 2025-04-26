<?php


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    // Si vous avez des colonnes spécifiques que vous souhaitez mass-associer
    protected $fillable = [
        'matricule',
        'matricule_prof',
        'intitule',
        'code',
    ];
}
