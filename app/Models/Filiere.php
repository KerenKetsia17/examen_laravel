<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    
    public function candidats()
    {
        return $this->hasMany(Candidat::class, 'id_filiere');
    }
}
