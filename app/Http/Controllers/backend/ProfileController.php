<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Headers;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        $user["profile"] = Headers::all();
        return view("backend.profiles.profiles", compact("user"));
    }

    public function edit($id)
    {
        $user = Headers::where("id",$id)->first();
        return view("backend.profiles.editProfile", compact("user"));
    }

    public function update(Request $request, $id)
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
            if(isset($request->img)){
                $user_file = uniqid() . "." . $request->img->getClientOriginalExtension();
                $request->img->move(public_path("images/users"), $user_file);
                $request->img = $user_file;
            }else{
                $request->img = $request->old_file;
            }

            $user = Headers::where("id",$id)->update([
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
        }

        if($request->has("old_file") && $request->has("img")){
            //ESKİ RESİMİN OLUP OLMADIĞINI SORGULATIP SİLME İŞLEMİNİ GERÇEKLEŞTİRİYORUM
            $path = "images/users/".$request->old_file;
            if(file_exists($path)){
                @unlink(public_path($path));
            }
        }

        if($user){
            return back()->with("success","UPDATED");
        }else{
            return back()->with("error","WRONG!");
        }
    }

    public function delete($id)
    {
        $delete = Headers::find($id);
        if($delete->delete()){
            return back()->with("success","DELETED");
        }
        return back()->with("error","WRONG");
    }

}
