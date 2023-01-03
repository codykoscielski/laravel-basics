<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller {
    //Create a function
    public function homepage() {
        return '<h1>Home Page</h1><a href="/about">View about</a>';
    }

    public function aboutpage() {
        return '<h1>About page</h1><a href="/">Back to home</a>';
    }
}
