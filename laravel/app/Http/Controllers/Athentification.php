<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Athentification extends Controller
{
    public function log() {
        return view("auth.log");
    }
    public function registration() {
        return view("auth.registration");

    }
}
