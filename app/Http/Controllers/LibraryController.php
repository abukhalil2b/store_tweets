<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Cate;
class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Book
     */
    public function bookIndex()
    {
    	$books = Book::all();
        return view('library.book.index',compact('books'));
    }

    public function bookCreate()
    {
        return view('library.book.create');
    }

    public function bookStore(Request $request)
    {
    	$this->validate($request,
    		['title'=>'required']
    	);
    	Book::create($request->except('_token'));
        return redirect()->route('library.book.index');
    }

    public function bookEdit($id)
    {
    	$book = Book::find($id);
        return view('library.book.edit',compact('book'));
    }
    public function bookUpdate(Request $request)
    {
    	$book = Book::find($request->id);
    	$book->update($request->except(['_token','id']));
        return redirect()->route('library.book.index');
    }


        /**
     * Cate
     */
    public function cateIndex()
    {
    	$cates = Cate::all();
        return view('library.cate.index',compact('cates'));
    }

    public function cateCreate()
    {
        return view('library.cate.create');
    }

    public function cateStore(Request $request)
    {
    	$this->validate($request,
    		['title'=>'required']
    	);
    	Cate::create($request->except('_token'));
        return redirect()->route('library.cate.index');
    }

    public function cateEdit($id)
    {
    	$cate = Cate::find($id);
        return view('library.cate.edit',compact('cate'));
    }
    public function cateUpdate(Request $request)
    {
    	$cate = Cate::find($request->id);
    	$cate->update($request->except(['_token','id']));
        return redirect()->route('library.cate.index');
    }
}
