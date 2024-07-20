<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller
{
    public function index() {
        return view("home");
    }
    public function shohada() {
        return view("shohada");
    }
    public function book() {
        return view("book");
    }
    public function down() {
        return view("down");
    }
    public function git() {
        return view("git");
    }
    public function ab() {
        return view("ab");
    }

    
}
