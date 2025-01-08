<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Liste tous les livres (R de CRUD).
     */
    public function index()
    {
        // Récupère tous les livres de la base
        $books = Book::all();
        // Retourne la vue index avec la liste des livres
        return view('books.index', compact('books'));
    }

    /**
     * Affiche le formulaire de création d'un livre (C de CRUD).
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Enregistre un nouveau livre en base (C de CRUD).
     */
    public function store(Request $request)
    {
        // (Optionnel) validation des champs
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'numeric|min:0',
        ]);

        // Crée le livre
        Book::create($request->all());

        // Redirection
        return redirect()->route('books.index')
                         ->with('success', 'Livre créé avec succès !');
    }

    /**
     * Affiche un livre en particulier (R de CRUD).
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Affiche le formulaire d'édition d'un livre (U de CRUD).
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Met à jour un livre en base (U de CRUD).
     */
    public function update(Request $request, Book $book)
    {
        // (Optionnel) validation
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'price' => 'numeric|min:0',
        ]);

        // Met à jour le livre
        $book->update($request->all());

        // Redirection
        return redirect()->route('books.index')
                         ->with('success', 'Livre mis à jour avec succès !');
    }

    /**
     * Supprime un livre (D de CRUD).
     */
    public function destroy(Book $book)
    {
        $book->delete();

        // Redirection
        return redirect()->route('books.index')
                         ->with('success', 'Livre supprimé avec succès !');
    }
}
