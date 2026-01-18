@extends('layouts.app')

@section('content')
    <h1>Ajouter une note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titre" required>
        <textarea name="content" placeholder="Contenu"></textarea>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
