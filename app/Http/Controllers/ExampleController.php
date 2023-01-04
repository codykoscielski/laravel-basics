<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller {
    //Create a function
    public function homepage() {

        //image loaded data from database
        $ourName = 'cody';
        $animals = ['tffy', 'booger', 'honey'];

        return view('homepage', ['allAniams' => $animals, 'name'=> $ourName, 'catname' => 'tuffy']);
    }

    public function aboutpage() {
        return '<h1>About page</h1><a href="/">Back to home</a>';
    }
}
