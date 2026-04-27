@extends('layouts.app')

@section('content')

<!-- Hero -->
<div class="text-center py-5">
    <h1>Organisez vos tâches facilement avec TaskFlow</h1>
    <p class="lead">Votre espace personnel pour gérer votre productivité</p>

    <a href="/register" class="btn btn-primary btn-lg me-2">S’inscrire</a>
    <a href="/login" class="btn btn-outline-secondary btn-lg">Se connecter</a>
</div>

<!-- Présentation -->
<div class="row text-center my-5">
    <div class="col-md-4">
        <i class="fa fa-tasks fa-3x mb-3"></i>
        <h5>Gestion des tâches</h5>
        <p>Créez, modifiez et supprimez vos tâches facilement.</p>
    </div>

    <div class="col-md-4">
        <i class="fa fa-chart-line fa-3x mb-3"></i>
        <h5>Suivi de progression</h5>
        <p>Visualisez votre avancement en temps réel.</p>
    </div>

    <div class="col-md-4">
        <i class="fa fa-layer-group fa-3x mb-3"></i>
        <h5>Catégorisation</h5>
        <p>Organisez vos tâches par catégories.</p>
    </div>
</div>

<!-- Équipe -->
<div class="my-5">
    <h2 class="text-center mb-4">Notre équipe</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="card text-center">
                <img src="https://via.placeholder.com/150" class="card-img-top">
                <div class="card-body">
                    <h5>Nom Prénom</h5>
                    <p>Frontend Dev</p>
                </div>
            </div>
        </div>

        <!-- duplique pour chaque membre -->
    </div>
</div>

@endsection