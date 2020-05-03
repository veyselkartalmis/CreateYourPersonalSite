<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Headers;
use Illuminate\Support\Str;

class HeaderController extends Controller
{
    public function index()
    {
        return view("backend.header.addHeader");
    }

    public function create(Request $request)
    {
        $request->theme = Str::slug($request->theme);

        $validate = $request->validate([
            "facebook_url" => "url",
            "instagram_url" => "url",
            "about_yourself" => "min:50|max:255",
            "about_skills" => "min:50|max:255",
            "born_date" => "date",
            "mail" => "email",
            "phone" => "min:11|numeric",
            "img" => "image|mimes:jpg,jpeg,png|max:2048"
        ]);

        if($validate){
            $user_file = uniqid() . "." . $request->img->getClientOriginalExtension();
            $request->img->move(public_path("images/users"), $user_file);
            $request->img = $user_file;

            $user = Headers::insert([
                "name" => $request->name,
                "job" => $request->job,
                "user_img" => $request->img,
                "facebook_url" => $request->facebook_url,
                "instagram_url" => $request->instagram_url,
                "linkedin_url" => $request->linkedin_url,
                "github_url" => $request->github_url,
                "about_yourself" => $request->about_yourself,
                "about_skills" => $request->about_skills,
                "born_date" => $request->born_date,
                "mail" => $request->mail,
                "phone" => $request->phone,
                "location" => $request->location,
                "theme" => $request->theme,
                "skill_1" => $request->skill_1,
                "skill_2" => $request->skill_2,
                "skill_3" => $request->skill_3,
                "skill_4" => $request->skill_4,
                "skill_5" => $request->skill_5,
            ]);
        }else{
            $request->flash();
        }

        if($user){
            return back()->with("success","CREATED NEW PROFILE");
        }else{
            return back()->with("error","WRONG");
        }
    }
}
