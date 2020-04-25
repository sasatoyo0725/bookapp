<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
  public function edit(Request $request)
{
    $book = Book::find($request->id);
    return view('book.edit', ['book' => $book]);
}

public function update(Request $request)
{
    $book = Book::find($request->id);
    $book->title = $request->title;
    $book->save();
    return redirect('/');
}
}
