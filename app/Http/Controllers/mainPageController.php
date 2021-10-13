<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\meditation;
use App\Models\realmeditation;
use Illuminate\Http\Request;

class mainPageController extends Controller
{
    public function index(){
        return view('mainpage');
    }
    public function article(){
        return view('article');
    }
    public function aPropos(){
        return view('aPropos');
    }
}
