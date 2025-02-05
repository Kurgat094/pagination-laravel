<?php

namespace App\Http\Controllers;

use App\Models\BookCollectionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function input(){
        return view('input');
    }
    public function inputPost(Request $request){
        request()->validate([
            'bookname' => 'required',
            'author' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' =>'required',
        ]);
        BookCollectionDetail::create([
            'bookname' => $request->bookname,
            'author' => $request->author,
            'price' => $request->price,
            'description' => $request->description,
            'image' =>  $request->file('image')->store('images','public'),
        ]);

        return redirect()->route('home')->with('success','Book Added Successfully');
    }
    public function home(){
        $books = BookCollectionDetail::paginate(1);
        return view('home',compact('books'));
    }
}
