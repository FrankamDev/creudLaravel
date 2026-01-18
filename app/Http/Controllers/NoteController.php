<?php

use App\Http\Controllers\Controller;
use App\Models\Notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string',
        ]);

        Notes::create($request->all());
        return redirect()->route('notes.index')->with('success', 'Note ajoutée.');
    }

    public function edit(Notes $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Notes $note)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'nullable|string',
        ]);

        $note->update($request->all());
        return redirect()->route('notes.index')->with('success', 'Note mise à jour.');
    }

    public function destroy(Notes $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note supprimée.');
    }
}
