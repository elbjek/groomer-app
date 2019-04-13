<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiGroomersController extends Controller
{
    public function index() {
        $groomers= Groomer::get();
        return $$groomers;
    }
}
