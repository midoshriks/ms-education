<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = Files::all();
        return view('Books.lecture', compact('files'));
    }


    public function uploade_file(Request $request){

        $this->validate($request,[
            'file_name' => 'required|max:70',
            'subject' => 'required|max:100',
            'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $files = new Files;
        $files->file_name = $request->file_name;
        $files->url_file = $request->url_file;
        $files->subject = $request->subject;
        $files->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('lectures/',$request->file('file')->getClientOriginalName());
            $files->file  = $request->file('file')->getClientOriginalName();
        }
        $files->save();

        // dd($files);

        $files->update();
        return redirect()->route('lecture')->with('success','Data has been Uploda lecture successfully');


        // var_dump($user->name);
        // exit;
    }

    public function edit_files(Request $request, $id)
    {
        $edit_files = Files::find($id);
        return view( 'Books.edit_file' ,compact('edit_files'));
    }

    public function update_file(Request $request, $id)
    {
        $this->validate($request,[
            'file_name' => 'required|max:70',
            'subject' => 'required|max:100',
            // 'file' => 'required|mimes:jpeg,png,jpg,gif,docx,pdf,txt,xlsx|max:5048',
        ]);

        $update_file =  Files::find($id);
        $update_file->file_name = $request->file_name;
        $update_file->url_file = $request->url_file;
        $update_file->subject = $request->subject;
        $update_file->cearte_by = Auth::user()->name;

        if($request->hasFile('file')){
            $request->file('file')->move('lectures/',$request->file('file')->getClientOriginalName());
            $update_file->file  = $request->file('file')->getClientOriginalName();
        }
        // $update_file->save();

        // dd($update_file);

        $update_file->update();
        return redirect()->route('lecture')->with('success','Data has been update lecture successfully');

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
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }

    public function delete_lecture(Request $request, $id)
    {
        $delete_lecture = Files::find($request->id);
        unlink("lectures/".$delete_lecture->file);
        Files::where("id", $delete_lecture->id)->delete();
        return back()->with("success", "File deleted successfully.");
    }
}
