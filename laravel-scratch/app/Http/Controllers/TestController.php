<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show($name)
    {
        return "My name is $name";
    }

    public function test () 
    {
        return "Test this method";
    }
}
