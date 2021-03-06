<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login(){
        return View("auth.login");
    }

    public function topics(){
        return View("pages.topics");
    }
}
