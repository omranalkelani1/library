<?php

namespace App\Http\Controllers;

use App\Models\tropes;
use App\Models\book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class c_tropes extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tropes= tropes::all();
        return view('all_tropes',['tropes'=>$tropes]);
    }
    public function my_tropes()
    {
        //
        session_start();
        $my_books=array();
        $tropes= tropes::all();
        $books= book::all();
        $data=array([ 
            'id_book'=>'',
            'book_name'=>'',
            'book_author'=>'',
            'publication_date'=>'',
            'tropes_date'=>'',
            'photo'=>'',
            'tropes_price'=>''
         ] );
       
        
        foreach ($books as $book){
        foreach ($tropes as $trop) {
         if ($trop['id_customer']==$_SESSION['id_customer']&&$book['id']==$trop['id_book']) {
             $data['book_name']=$book['book_name'];
             $data['book_author']=$book['book_author'];
             $data['publication_date']=$book['publication_date'];
             $data['photo']=$book['photo'];
             $data['tropes_price']=$book['tropes_price'];
             $data['id_book']=$book['id'];
             $data['tropes_date']=$trop['tropes_date'];

               array_push($my_books,$data);
         }
        }}
       

        return view('my_tropes',['my_books'=>$my_books]);
       // return $tropes;
    }
    public function my_favourite()
    {
        //
        session_start();
        $my_favourites=array();
        $tropes= tropes::all();
        $books= book::all();
        $data=array([ 
            'id_book'=>'',
            'book_name'=>'',
            'book_author'=>'',
            'publication_date'=>'',
            'photo'=>'',
            'tropes_price'=>''
         ] );
       
        
        foreach ($books as $book){
        foreach ($tropes as $trop) {
         if ($trop['id_customer']==$_SESSION['id_customer']&&$book['id']==$trop['id_book']&&$trop['is_favourite']==1) {
             $data['book_name']=$book['book_name'];
             $data['book_author']=$book['book_author'];
             $data['publication_date']=$book['publication_date'];
             $data['photo']=$book['photo'];
             $data['tropes_price']=$book['tropes_price'];
             $data['id_book']=$book['id'];

               array_push($my_favourites,$data);
         }
        }}
       

        return view('my_favourite',['my_favourites'=>$my_favourites]);
       // return $tropes;
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
        session_start();
       $tropes=new tropes;
       $tropes->id_book=$_GET['book_id'];
       $tropes->book_name=$_GET['book_name'];
       $tropes->tropes_price=$_GET['tropes_price'];
       $tropes->id_customer=$_SESSION['id_customer'];
       $tropes->user_name=$_SESSION['user_name'];
       $tropes->is_favourite=0;
       $check= $tropes->save();
       if($check)
       return redirect('all_books');
       else
       return 0 ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tropes  $tropes
     * @return \Illuminate\Http\Response
     */
    public function show(tropes $tropes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tropes  $tropes
     * @return \Illuminate\Http\Response
     */
    public function edit(tropes $tropes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tropes  $tropes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tropes $tropes)
    {
        //
        session_start();
        $find = DB::table('tropes')
        ->where('id_customer', '=', $_SESSION['id_customer'])
        ->where('id_book', '=', $_GET['id_book'])
        ->where('is_favourite', '=', 0)
        ->update([
            'is_favourite'=>1
        ]);
     
     
        if($find==1)
         return  redirect('my_tropes');
        else{
            DB::table('tropes')
            ->where('id_customer', '=', $_SESSION['id_customer'])
            ->where('id_book', '=', $_GET['id_book'])
            ->where('is_favourite', '=', 1)
            ->update([
                'is_favourite'=>0
            ]);
           return redirect('my_favourite');
        }
    }
// }
// else {
//     return "can`t update ";
// }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tropes  $tropes
     * @return \Illuminate\Http\Response
     */
    public function destroy(tropes $tropes)
    {
        //
        $find= DB::table('tropes')
        ->where('id_book','=',$_GET['id_book'])
        ->where('id_customer','=',$_GET['id_customer'])
        ->delete();
        if($find)
        return redirect('all_tropes');
        else 
        return 0;   
    }
}
