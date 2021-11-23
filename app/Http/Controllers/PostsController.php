<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('dashbord.dashbord', compact('show_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'body' => 'required',
            // 'file_body' => 'required|mimes:jpeg,png,jpg,gif,|max:1048',
            'file_body' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Posts();
        $post->body = $request->body;
        $post->file_body = $request->file_body;
        $post->user_id = Auth::user()->id;
        $post->user_img = Auth::user()->img;
        $post->user_email = Auth::user()->email;

        if($request->hasFile('file_body')){
            $request->file('file_body')->move('posts/',$request->file('file_body')->getClientOriginalName());
            $post->file_body  = $request->file('file_body')->getClientOriginalName();
        }

        $post->save();
        // dd($post);
        return redirect()->route('home')->with('success','Data has been Uploade posts successfully');

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
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts , $id)
    {
        $edit_post = Posts::find($id);
        // dd($edit_post->body);
        return view('posts.edit_posts', compact('edit_post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'body' => 'required',
            // 'file_body' => 'required|mimes:jpeg,png,jpg,gif,|max:1048',
            'file_body' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $update_posts =  Posts::find($id);
        $update_posts->body = $request->body;
        // $update_posts->file_body = $request->file_body;
        $update_posts->file_body = $update_posts->file_body;
        $update_posts->user_id = Auth::user()->id;
        $update_posts->user_img = Auth::user()->img;
        $update_posts->user_email = Auth::user()->email;

        if($request->hasFile('file_body')){
            $request->file('file_body')->move('posts/',$request->file('file_body')->getClientOriginalName());
            $update_posts->file_body  = $request->file('file_body')->getClientOriginalName();
        }

        $update_posts->save();
        // dd($update_posts);
        return redirect()->route('home')->with('success','Data has been Update posts successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Posts::find($request->id);
        unlink("posts/".$post->file_body);
        Posts::where("id", $post->id)->delete();

        return back()->with("success", "Posts deleted successfully.");
    }
}
