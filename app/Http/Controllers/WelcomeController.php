<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Praktikum 2
// No 2
class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    // praktikum 3
    // no 8
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Fardiyani Afroul Yasinta']);
    // }

    // no 11
    public function greeting(){
        return view('blog.hello')
        ->with('name','Fardiyani Afroul Yasinta')
        ->with('occupation','Software Engineering');
    }
}



