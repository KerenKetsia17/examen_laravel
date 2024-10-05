<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'note', 'id_filiere'];

    public function filieres()
    {
        return $this->belongsTo(Filiere::class, 'id_filiere');
    }
}
