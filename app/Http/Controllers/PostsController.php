<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listing of posts
        //to paginate
        // $posts = Post::orderBy('title','desc')->paginate(10);

        $allPosts = Post::all();
        return view('posts.index')->with('allPosts',$allPosts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // represent the form post/create
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // f() for submitting form (get the form vars as $request) to db
        // $this->validate($request,[
        //     'quote'=>'required',
        //     'bywho' => 'required'            
        // ]);

        $data = new Post();
        $data->quote = $request->input("quote");
        $data->bywho = $request->input("bywho");
        $data->description = $request->input("description");
        $data-> save();

        return redirect('/posts');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //shows a given post ::  what $id to show
        // $aPost = Post::find($id);
        //or $aPost = DB::Select('SELECT * FROM posts');
        // $aPost = Post::orderBy('title','desc')->get(); 

        $aPost = Post::find($id);      
        return view('posts.show')->with('aPost',$aPost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit form ::  what $id to edit
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update from edit form ::  what $id to update and the vars from form
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //which one to destroy
    }

    // .........my functions............
    // public function contact(){
    // //     return view('pages.contact');
    // }
    // public function showPost($id){
    //     //$jina = 'Benja at this post:';
    //     // $arre = array(
    //     //     'jina'=>'Benj at:',
    //     //     'id'=> $id
    //     // );
    //     // return view('pages.post')->with($arre);
    //     // @extends('layouts.template')
    //     // @section('content')
    //     // {{-- <h2>{{$jina}}</h2> --}}
    //     // <h2>{{$jina}}{{$id}}</h2>
    //     // @endsection


    //     //  return view('pages.post',compact('id','jina'));
        
        
    //     //chaining with the with() method taking two params(name of var and var itself)
    //     //return view('pages.post')->with('id',$id); when public function showPost($id)
    //     //or use......return view('post',compact('id')); which can pass many
    //     //params like return view('post',compact('id','sth','sth2')); and same on showPost
    // }
}
