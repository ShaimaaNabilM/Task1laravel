<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{
   public function index(){

       $books = Book::orderBy('id','desc')->paginate(10);
       $page = "Books";
       return view('books', [
       "page" => $page,
       "books" => $books
]);
   }
   public function create(){
    $categories=Category::all();
    $page = "create book";
    return view('create-book', ['page' => $page,'categories'=>$categories]);
   }

   public function store(CreateBookRequest $request){
    $fileName= Book::uploadFile($request,$request->pic);
   
    Book::create(
        [
            "title" =>$request->title,
            "price"=>$request->price,
            "description"=>$request->description,
            "bok_id"=>$request->category,
            "pic"=>$fileName
          
            
          
        ] );
       return  redirect()->route('books.index');
   }
   public function show($book){
    $book=Book::findOrFail($book);
    //dd($book);
   return view('shows',['book'=>$book]);
   }
   public function destroy($book){
    $book=Book::find($book);
    $book->delete();
    return redirect()->back();
   }

   public function edit($book)
{
    $book = Book::find($book);
    return view('editbook', ['book' => $book]);
}

public function update(Request $request, $book)
{
    $book = Book::find($book);
    $book->title = $request->input('title');
    $book->price = $request->input('price');
    $book->description = $request->input('description');
    
    // Update more fields as needed
    
    $book->save();

    return redirect()->route('books.index');
}
}
