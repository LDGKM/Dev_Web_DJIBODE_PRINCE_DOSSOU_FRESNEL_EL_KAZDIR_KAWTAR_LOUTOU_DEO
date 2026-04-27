@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Mes tâches</h2>
    <a href="/tasks/create" class="btn btn-primary">+ Nouvelle tâche</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Priorité</th>
            <th>Statut</th>
            <th>Date limite</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->priority }}</td>
            <td>{{ $task->status }}</td>
            <td>{{ $task->due_date }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection