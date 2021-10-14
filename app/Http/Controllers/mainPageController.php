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

    public function sidebar_add_article(){
        return view('sidebar_add_article');
    }
    public function sidebar_article_messagerie(){
        return view('sidebar_article_messagerie');
    }
    public function sidebar_article(){
        return view('sidebar_article');
    }
    public function sidebar_temoignage_all(){
        return view('sidebar_temoignage_all');
    }
    public function sidebar_temoignage(){
        return view('sidebar_temoignage');
    }
    public function sidebar_temoignages_real_all(){
        return view('sidebar_temoignages_real_all');
    }
    public function sidebar_temoignages_real(){
        return view('sidebar_temoignages_real');
    }
    public function sidebar_profil(){
        return view('sidebar_profil');
    }
}
