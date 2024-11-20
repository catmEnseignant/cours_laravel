@extends('layouts.master')
@section('title')
    Formulaire étudiant
@endsection
@section('contenu')
    <div class="container bg-light divBreakClass2">
        <div class="bg-white divBreakClass3">
            <nav aria-label="breadcrumb" class="divBreakClass4">
                <ol class="breadcrumb divBreakClass5">
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Administrateurs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Listes des administrateurs</li>
                </ol>
            </nav>
            <div>
                <div class="center row bg-light divAdmin">
                    <div class="col-4"><strong>Formulaire étudiant</strong></div>
                </div>
            </div>
            <div class="center row container">
                <form action="{{route('etudiants.update',$etudiant->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Numéro carte</label>
                            <input type="text" class="form-control" name="carte_etudiant" value="{{$etudiant->carte_etudiant}}" id="exampleInputEmail1" placeholder="20220982HZT">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Prénom</label>
                            <input type="text" name="prenom" class="form-control" value="{{$etudiant->prenom}}" id="exampleInputEmail1" placeholder="Moussa">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Nom</label>
                            <input type="text" name="nom" class="form-control" value="{{$etudiant->nom}}" id="exampleInputEmail1" placeholder="Diop">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Adresse</label>
                            <input type="text" class="form-control" name="adresse" value="{{$etudiant->adresse}}" placeholder="Grand-Yoff">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">date de naissance</label>
                            <input type="date" name="date_nais" value="{{$etudiant->date_nais}}" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Lieu de naissance</label>
                            <input type="text" class="form-control" value="{{$etudiant->lieu_nais}}" name="lieu_nais" placeholder="Grand-Yoff">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1 mb-2">Classe</label>
                            <select name="classe_id" class="form-control">
                                @foreach($classes as $classe)
                                    @if($classe->id==$etudiant->classe_id)
                                        <option value="{{$classe->id}}" selected>{{$classe->nom}}</option>
                                    @else
                                        <option value="{{$classe->id}}">{{$classe->nom}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
