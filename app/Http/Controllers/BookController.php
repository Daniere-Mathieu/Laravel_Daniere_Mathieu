<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function bookList() {
      $bookList = Book::all();
      return view('bookList',	compact('bookList'));

    }
    public function bookAddPage(){
      return view('booksAdd');
    }
    public function bookAdd(Request $request) {
      $book = new Book;
      $book->title = $request->titleAdd;
      $book->author = $request->authorAdd;
      $book->publication_year = $request->publicationYearAdd;
      $book->genre = $request->genreAdd;
      $book->synopsis = $request->synopsisAdd;
      $book->save();
      return redirect('/list');
    }
}
