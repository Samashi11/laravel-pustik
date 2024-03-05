<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrower;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        $books = Book::paginate(8);
        return view('index', [
            'books' => $books
        ]);
    }

    public function books()
    {
        $books = Book::all();
        return view('books', [
            'books' => $books
        ]);
    }
    public function detail(Request $request)
    {
        $excludedIds = [$request->id];
        $book =  Book::find($request->id);
        $books = Book::whereNotIn('id', $excludedIds)->take(5)->get();
        return view('detail', compact('book', 'books'));
    }

    public function history()
    {
        $books = Book::all();
        $borrowers = Borrower::where('user_id', auth()->user()->id)->get();
        return view('history', [
            'borrowers' => $borrowers,
            'books' => $books
        ]);
    }
}
