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

  public function store(Request $request) {
    // return $request;
    Book::create([
        'title' => $request['title'],
        'author' => $request['author'],
        'released_at' => $request['released_at'],
    ]);

  return redirect('/books');
}

public function show($id) {
  $book = Book::find($id);
  // return $book;
 return view('books.show' , ['singlebook' => $book]);
}


public function destroy($id) {
  $book = Book::find($id);
  $book->delete();
  return redirect('/books');
}

public function edit($id){
  $book = Book::find($id);
  return view('/books.edit', ['editBook' =>$book]);
}

public function update(Request $request, $id)  {
  $book = Book::find($id);
  $book->update([
    'title' => $request['title'],
    'author' => $request['author'],
    'released_at' => $request['released_at'],
]);

return redirect('/books/' . $book->id);
}
}