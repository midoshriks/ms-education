<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_1()
    {
        // $books_student = Books::all();
        $books_student_1 = Books::where('term','term one')->get();
        return view('Books.books_students_1', compact('books_student_1'));
    }
    public function index_2()
    {
        // $books_student = Books::all();
        $books_student_2 = Books::where('term','term tow')->get();
        return view('Books.books_students_2', compact('books_student_2'));
    }

    public function uploade_books(Request $request){

        $this->validate($request,[
            'book_name' => 'required|max:70',
            'book_subject' => 'required|max:100',
            'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $books_student = new Books();
        $books_student->book_name = $request->book_name;
        $books_student->term = $request->term;
        $books_student->book_subject = $request->book_subject;
        $books_student->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('3ooks_studunt_2/',$request->file('file')->getClientOriginalName());
            $books_student->books  = $request->file('file')->getClientOriginalName();
        }
        $books_student->save();

        // dd($books_student);

        // $books_student->update();
        return redirect()->route('books_student_tow')->with('success','Data has been Uplode File successfully');


        // var_dump($user->name);
        // exit;
    }

    public function edit_books(Request $request, $id)
    {
        $edit_books = Books::find($id);
        return view( 'Books.edit_book' ,compact('edit_books'));
    }

    public function update_books(Request $request, $id)
    {
        $this->validate($request,[
            'book_name' => 'required|max:70',
            'book_subject' => 'required|max:100',
            // 'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $update_books = Books::find($id);
        $update_books->book_name = $request->book_name;
        $update_books->term = $request->term;
        $update_books->book_subject = $request->book_subject;
        $update_books->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('3ooks_studunt_2/',$request->file('file')->getClientOriginalName());
            $update_books->books  = $request->file('file')->getClientOriginalName();
        }
        // $update_books->save();

        // dd($update_books);

        $update_books->update();
        if($update_books->term == 'term one'){
            return redirect()->route('books_student_1')->with('success','Data has been Update File successfully');
        }
        return redirect()->route('books_student_2')->with('success','Data has been Update File successfully');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
    public function delete_Books(Request $request, $id)
    {
        $book = Books::find($request->id);
        unlink("3ooks_studunt_2/".$book->books);
        Books::where("id", $book->id)->delete();

        return back()->with("success", "Book deleted successfully.");
    }

    // public function delete_Books(Books $files, $id)
    // {
    //     $delete_Books = Books::find($id);
    //     $delete_Books->delete();
    //     return redirect()->route('books_student')->with('delete','Data has been registered Delete');
    // }
}
