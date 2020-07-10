<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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
        $cates = Cate::all();
        return view('library.book.create',compact('cates'));
    }

    public function bookStore(Request $request)
    {
        
    	$this->validate($request,
    		['title'=>'required','cover' => 'mimes:jpeg,bmp,png']
        );
        if($request->hasFile('cover')){
            $extension = $request->file('cover')->extension();
            $cover = time().'.'.$extension;
            $request->file('cover')->storeAs(
                'covers',$cover,'public'
            );
        }
        $book = Book::create($request->except('_token'));
        $book->update(['cover'=>'covers/'.$cover]);
        return redirect()->route('library.book.index')->with(['status'=>'تم اضافة الكتاب']);
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


    public function cateCreate()
    {
        $cates = Cate::all();
        return view('library.cate.create',compact('cates'));
    }

    public function cateStore(Request $request)
    {
    	$this->validate($request,
    		['title'=>'required']
    	);
    	Cate::create($request->except('_token'));
        return redirect()->route('library.cate.create');
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
