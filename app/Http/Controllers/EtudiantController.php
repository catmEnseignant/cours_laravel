<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index',compact('etudiants'));
    }

    public function create(){
        $classes = Classe::all();
        return view('etudiants.create',compact('classes'));
    }

    public function store(Request $request){

        $request->validate([
            'carte_etudiant' => 'required|numeric',
            'prenom' => 'required',
        ]);

        $dateNaissance = $request->date_nais; // La date de naissance récupérée depuis la requête
        $age = Carbon::parse($dateNaissance)->age;
        $datasEtudiant = $request->all();
        $datasEtudiant['age'] = $age;
        Etudiant::create($datasEtudiant);
        return redirect(route('etudiants.index'));
    }

    public function edit($id)
    {
        //$etudiants = Etudiant::where('id',$id)->get()->first();
        // //Difference making first or no because we know its return one element
        $etudiant = Etudiant::find($id);
        $classes = Classe::all();
        return view('etudiants.edit',compact('classes','etudiant'));
    }

    public function update($id,Request $request)
    {
        $et1 = Etudiant::find($id); //Static method for a question
        $dateEtudiant = $request->all();
        $et1->update($dateEtudiant);
        return redirect(route('etudiants.index'));
    }

    public function destroy($id)
    {
        //$etudiants = Etudiant::where('id',$id)->get()->first();
        // //Difference making first or no because we know its return one element
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return back();
    }

}
