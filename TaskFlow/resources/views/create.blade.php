@extends('layouts.app')

@section('content')

<h2>Créer une tâche</h2>

<form method="POST" action="/tasks">
    @csrf

    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Priorité</label>
        <select name="priority" class="form-control">
            <option>Basse</option>
            <option>Moyenne</option>
            <option>Haute</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Date limite</label>
        <input type="date" name="due_date" class="form-control">
    </div>

    <button class="btn btn-success">Créer</button>
</form>

@endsection