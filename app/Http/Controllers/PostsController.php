<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hey?";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "store";
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // .........my functions............
    public function contact(){
        return view('pages.contact');
    }
    public function showPost($id){
        //$jina = 'Benja at this post:';
        $arre = array(
            'jina'=>'Benj at:',
            'id'=> $id
        );
        return view('pages.post')->with($arre);

        //  return view('pages.post',compact('id','jina'));
        
        
        //chaining with the with() method taking two params(name of var and var itself)
        //return view('pages.post')->with('id',$id); when public function showPost($id)
        //or use......return view('post',compact('id')); which can pass many
        //params like return view('post',compact('id','sth','sth2')); and same on showPost
    }
}
