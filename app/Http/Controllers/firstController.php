<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Http\Controllers\secondController;

class firstController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = array();
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['number']= $request->number;
        return redirect()->back()->with('good', 'Student Data Inserted.');


    }

    public function about()
    {
        return view('about');
    }

    public function laravel()
    {
        return view('laravel');
    }
}
