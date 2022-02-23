<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pages.reg');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('pages.reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this -> validate($request, [
        //     'inputFname' => 'required',
        //     'inputLname' => 'required'
        // ]);

        // $register = new Register();
        // $register->inputFname = $request->input("inputFname");
        // $register->inputLname = $request->input("inputLname");
        // $register->inputEmail = $request->input("inputEmail");
        // $register->inputPassword = $request->input("inputPassword");
        // $register->inputAddress = $request->input("inputAddress");
        // $register->save();
        // @extends('layouts.template')
        //     @section('content')
        //     <form class="row g-3" action="/reg" method="POST">
        //     @csrf
        //       <div class="col-md-6">
        //         <label for="inputFname" class="form-label">First Name</label>
        //         <input type="text" class="form-control" id="inputFname" name="inputFname">
        //       </div>
        //       <div class="col-md-6">
        //         <label for="inputLname" class="form-label">Last Name</label>
        //         <input type="text" class="form-control" id="inputLname" name="inputLname">
        //       </div>      
        //       <div class="col-md-6">
        //         <label for="inputEmail" class="form-label">Email</label>
        //         <input type="email" required class="form-control" id="inputEmail" name="inputEmail">
        //         <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        //       </div>
        //       <div class="col-md-6">
        //         <label for="inputPassword" class="form-label">Password</label>
        //         <input type="password" class="form-control" id="inputPassword"  name="inputPassword">
        //       </div>
        //       <div class="col-12">
        //         <label for="inputAddress" class="form-label">Address</label>
        //         <input type="text" class="form-control" id="inputAddress" placeholder="e.g. Ngong Rd..." name="inputAddress">
        //       </div>
        //       <div class="col-12">
        //         <button type="submit" class="btn btn-dark">Register</button>
        //       </div>
        //     </form>
        //     @endsection 




        //part 4 of the question
        // return redirect('/'); 
        // -> with('success', 'The registration is complete');
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
}
