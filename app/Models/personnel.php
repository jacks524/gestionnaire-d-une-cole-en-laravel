<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel extends Model
{
    use HasFactory;
    protected $fillable =[
        
            'matricule',
            'nom',
            'sexe',
            'statut',
            'telephone',
            
        

    ];
}