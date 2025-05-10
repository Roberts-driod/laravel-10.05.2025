<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  public function index() {
    $books = Book::all();
    return view('books.index', ['allBooks' => $books]);
  
  }


  public function create(){
    return view('books.create');
  }

  public function store(Request $request){

  Book::create([
    'title' => $request['title'],
    'author' => $request['author'],
    'released_at' => $request['released_at'],
  ]);

  return redirect('/books');
}
}