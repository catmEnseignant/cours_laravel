<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{

    protected $table = "etudiants";
    protected $fillable = ['carte_etudiant','prenom','nom','adresse','age','date_nais','lieu_nais','classe_id'];



    public function classeEtudaint()
    {
        return $this->belongsTo(Classe::class,'classe_id');
    }




}
