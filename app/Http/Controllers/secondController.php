<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class secondController extends Controller
{
    public function test()
    {
        return "Its comes from another controller";
    }
}
