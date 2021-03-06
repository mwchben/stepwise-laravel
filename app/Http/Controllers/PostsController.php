<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//for deleting image in diks
use Illuminate\Support\Facades\Storage;
 
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class PostsController extends Controller
{
      /**
     * Create a new controller instance to ensure only logged in users can 
     * manipulate the quotes.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            //this views can only be seen if not a member
            'index',
            'show'
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // listing of posts
        //to paginate
        //$allPosts = Post::orderBy('quote','desc')->paginate(4);


        //$allPosts = Post::all();
        $allPosts = Post::all()->sortByDesc('created_at');
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
   
        $request->validate([
            'quote'=> ['required'],
            'bywho' => ['required'],
            // 'file' => 'required|,jpeg,bmp,png,jpg|max:1999',
            'description' => ['required','max:150'],
           ]);

        // $this->validate($request,[
        //     'quote'=>'required',
        //     'bywho' => 'required'            
        // ]);

        // $validatedData = $request->validate([
        //     'title' => ['required', 'unique:posts', 'max:255'],
        //     'body' => ['required'],
        // ]);

        if ($request->hasFile('image')){ 

            //var assigning
            $file = $request->file('image');
            //hence...
            $name = $file->getClientOriginalName();
            $nameWithoutExtension = pathinfo($name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            //new name of image to upload

            $image_uploaded = $nameWithoutExtension."_".time().".".$extension;

            //path in local folder for image to  be stored
            $path = $request->file('image')->storeAs('public/imageUploads', $image_uploaded);
        }else {
            $image_uploaded = 'no_image.png';
        }

        $data = new Post();
        $data->quote = $request->input("quote");
        $data->bywho = $request->input("bywho");
        $data->description = $request->input("description");
        $data->user_id = auth()->user()->id; //to track what post belongs to what user
        $data->image = $image_uploaded;
        $data-> save();

        return redirect('/')->with('success','Quote added successfully');
        //return redirect('/posts');
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
        $aPost = Post::find($id); 
        
        //ensures no other member via URL typing can edit other's 
        if(auth()->user()->id !== $aPost->user_id){
            return redirect('posts');
            // ->with('message','Not Permitted'); include this once error msg is up and running! 
        }
        
        return view('posts.edit')->with('aPost',$aPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  ...................................................
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')){ 
            //var assigning
            $file = $request->file('image');
            //hence...
            $name = $file->getClientOriginalName();
            $nameWithoutExtension = pathinfo($name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            //new name of image to upload

            $image_uploaded = $nameWithoutExtension."_".time().".".$extension;

            //path in local folder for image to  be stored
            $path = $request->file('image')->storeAs('public/imageUploads', $image_uploaded);
        }
        //update from edit form ::  what $id to update and the vars from form
        $data = Post::find($id);
        
        // DB::table('posts')->where('id', $request->id)->update([
        //     'quote' => $request->quote,
        //     'bywho' => $request->bywho,
        //     'description' => $request->description,
        //     ]);

        // $data = DB::table('posts')
        //       ->where('id', $id)
        //       ->update([
        //           'quote' => $request->quote,
        //           'bywho' => $request->bywho,
        //           'description' => $request->description
        //         ]);
        // $data->quote=Input::get('quote');
        // $data->bywho=Input::get('bywho');
        // $data->description=Input::get('description');
        
        $data->quote = $request->input('quote');
        $data->bywho = $request->input('bywho');
        $data->description = $request->input('description');
        if($request->hasFile('image')){
            $data->image = $image_uploaded; 
        }
        $data-> save();

        return redirect('/')->with('success','Quote updated successfully');
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
        $data = Post::find($id); 

        //ensures no other member via URL typing can delete other's
        if(auth()->user()->id !== $data->user_id){
            return redirect('posts');
            // ->with('message','Not Permitted'); include this once error msg is up and running! 
        }

        if($data->image != 'no_image.png'){
            Storage::delete('public/imageUploads/'.$data->image);
        }

        $data -> delete(); 
        return redirect('/')->with('success','Quote removed successfully');
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


//i have used $data in destroy() and update() methods but $aPost in edit() and show() methods