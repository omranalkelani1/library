<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use App\Models\tropes;
use Illuminate\Http\Request;
use App\traits\my_trait;

class c_book extends Controller
{
    use my_trait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books= book::all();
        $tropes= tropes::all();
        $categores= category::all(); 
         if ($_SERVER['REQUEST_URI']=='update_book?{book_id}'){
            return view('update_book',[
                'books'=>$books]);
         } 
        return
        view('all_books',[
            'books'=>$books , 'categores'=>$categores
           , 'tropes'=>$tropes
          ]);
                                                                         
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   
       $file_name=$this->uploud_image($request->photo,'img/book');

        $book=new book;
        $book->book_name=$request->book_name;
        $book->book_author=$request->book_author;
        $book->publication_date=$request->publication_date;
        $book->id_category=$request->id_category;
        $book->book_price=$request->book_price;
        $book->tropes_price=$request->tropes_price;
        $book->photo=$file_name;

        $check=$book->save();
        if($check)
        return redirect('add_book');
        else
        return 0;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
        $books= book::all();
        $tropes= tropes::all();
        $categores= category::all(); 
            return view('update_book',[
                'books'=>$books,'categores'=>$categores]);
         } 

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
        $find= book::find($request->id);
        $find->book_name=          $request->book_name;
        $find->book_author=        $request->book_author;
        $find->publication_date	=  $request->publication_date	;
        $find->id_category	=      $request->id_category	;
        $find->book_price=$request->book_price;
        $find->tropes_price=$request->tropes_price;

        $check=$find->save();
        if($check)
        return redirect('all_books');
        else
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $find= book::find($_GET['book_id']);
        $check=$find->delete();
        if($check)
        return redirect('all_books');
        else 
        return 0;
    }
}
