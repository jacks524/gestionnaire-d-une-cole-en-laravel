<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class convocation extends Model
{
    use HasFactory;
    protected $fillable=[
        'matricule',
        'motif',
        'parent'
    ];
}
