<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataEtudiant['carte_etudiant'] = '20232938739H';
        $dataEtudiant['prenom'] = 'Madiop';
        $dataEtudiant['nom'] = 'DIOP';
        $dataEtudiant['adresse'] = 'Keur Massar';
        $dataEtudiant['age'] = 22;
        $dataEtudiant['date_nais'] = '1998-12-09-';
        $dataEtudiant['lieu_nais'] = 'Malika';
        $dataEtudiant['classe_id'] = 1;
        Etudiant::create($dataEtudiant);
    }
}
