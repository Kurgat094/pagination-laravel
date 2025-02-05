<?php

namespace App\Http\Controllers;

use App\Models\BookCollectionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function input(Request $request){
        request()->validate([
            'bookname' => 'required',
            'author' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => $request->file('image')->store('images','public') or null,
        ]);
        BookCollectionDetail::create($request->all());

        return redirect()->route('home');
    }
    public function home(){
        $books = BookCollectionDetail::paginate(5);
        return view('home',compact('books'));
    }
}
