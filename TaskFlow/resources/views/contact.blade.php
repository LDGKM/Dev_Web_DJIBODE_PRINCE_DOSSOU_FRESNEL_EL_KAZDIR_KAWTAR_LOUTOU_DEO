@extends('layouts.app')

@section('content')

<h2>Contact</h2>

<form>
    <div class="mb-3">
        <label>Nom</label>
        <input type="text" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Message</label>
        <textarea class="form-control" required></textarea>
    </div>

    <button class="btn btn-primary">Envoyer</button>
</form>

@endsection