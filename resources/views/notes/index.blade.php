@extends('layouts.app')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}" class="bg-blue-500 text-white px-4 py-2">Ajouter une note</a>

    @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($notes as $note)
            <li>
                <strong>{{ $note->title }}</strong><br>
                {{ $note->content }}<br>
                <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
