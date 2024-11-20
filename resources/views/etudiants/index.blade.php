@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endsection
@section('title')
    Liste des étudiants
@endsection
@section('contenu')

        <!-- Autre contenu de votre section -->
        <div class="container bg-light divBreakClass2">
        <div class="bg-white divBreakClass3">
            <nav aria-label="breadcrumb" class="divBreakClass4">
                <ol class="breadcrumb divBreakClass5">
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item divBreakClass6"><a href="#">Étudiants</É></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Listes des étudiants</li>
                </ol>
            </nav>
            <div>
                <div class="center row bg-light divAdmin">
                    <div class="col-4"><strong>Listes des étudiants</strong></div>
                    <div class="col-4"><strong>Nombre d'étudiants</strong></div>
                    <div class="col-4 text-end"><a href="{{route('etudiants.create')}}" class="btn btn-outline-primary me-3"><span class="p-2">Ajouter un étudiant</span></a></div>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nuémro de carte</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Age</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                        <tr class="table-secondary">
                            <td>{{$etudiant->carte_etudiant}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->adresse}}</td>
                            <td>{{$etudiant->age}}</td>
                            <td>{{$etudiant->classeEtudaint->nom}}</td>
                            <td>
                                <!-- Icône pour voir -->
                                <a href="" title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <!-- Icône pour éditer -->
                                <a href="{{route('etudiants.edit',$etudiant->id)}}" title="Éditer">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Icône pour supprimer -->
                                <a style="color: red;" href="{{route('etudiants.destroy',$etudiant->id)}}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation example" class="navClass2">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link text-dark href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link bg-primary text-white href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
