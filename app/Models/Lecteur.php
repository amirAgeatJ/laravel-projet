<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecteur extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];

    // Pour sécuriser le mot de passe avant de l'enregistrer
    protected $hidden = ['password'];

    // Si vous souhaitez utiliser les attributs de date (created_at et updated_at)
    protected $dates = ['created_at', 'updated_at'];
    
}
