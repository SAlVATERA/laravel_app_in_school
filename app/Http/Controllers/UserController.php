<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return "Hello from UserController";
    }
    // public function goto()
    // {
    //     return view('Users');
    // }
    public function show($id)
    {
        $data=array(
            "id"=> $id,
            "name"=> "jason",
            "age"=> 21,
            "year"=> 2024
        );
        return Controllers('UserController',[$data=>$data]);
    }
}
