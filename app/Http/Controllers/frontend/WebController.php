<?php

namespace App\Http\Controllers\frontend;

use App\Headers;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index($id, $theme)
    {
        $user = Headers::where("id",$id)->first();
        if($theme == "personel-web-side-1"){
            return view("frontend.index", compact("user"));
        } elseif($theme == "personel-web-side-2"){
            return view("frontend.personel1", compact("user"));
        }
    }

    public function showThemes()
    {
        return view("backend.themes.themesPage");
    }
}
