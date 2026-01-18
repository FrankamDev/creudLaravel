@extends('layouts.app')

@section('content')
    <h1>Modifier une note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $note->title }}" required>
        <textarea name="content">{{ $note->content }}</textarea>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
