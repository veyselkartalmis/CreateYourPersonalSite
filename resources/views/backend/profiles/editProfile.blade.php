@extends("backend.layout")
@section("title") <strong>EDIT PROFILE</strong>@endsection
@section("content")
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Update the blanks</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route("profilUpdate", $user->id)}}" enctype="multipart/form-data">
                @CSRF
                <div class="row">
                    <i class="fa fa-user mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Name and Surname</label>
                            <input type="text" name="name" required class="form-control" value="{{$user->name}}">
                        </div>
                    </div>
                    <i class="fa fa-briefcase mt-4"></i>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Job</label>
                            <input type="text" name="job" required class="form-control" value="{{$user->job}}">
                        </div>
                    </div>
                    <i class="fa fa-facebook mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Facebook Url</label>
                            <input type="url" name="facebook_url" required class="form-control" value="{{$user->facebook_url}}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <i class="fa fa-instagram mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Instagram Url</label>
                            <input type="url" name="instagram_url" required class="form-control" value="{{$user->instagram_url}}">
                        </div>
                    </div>
                    <i class="fa fa-linkedin mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Linkedin Url</label>
                            <input type="url" name="linkedin_url" class="form-control" value="{{$user->linkedin_url}}">
                        </div>
                    </div>
                    <i class="fa fa-github mt-4"></i>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Github Url</label>
                            <input type="url" name="github_url" class="form-control" value="{{$user->github_url}}">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fa fa-user-tie mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">About Yourself:</label>
                            <textarea class="form-control" required name="about_yourself" cols="30" rows="5">{{$user->about_yourself}}</textarea>
                        </div>
                    </div>
                    <i class="fa fa-laptop-code mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">About Skills:</label>
                            <textarea class="form-control" required name="about_skills" cols="30" rows="5">{{$user->about_skills}}</textarea>
                        </div>
                    </div>
                    <i class="fa fa-baby mt-4"></i>
                    <div class="col-md-3">
                        <label for="1" class="bmd-label-floating mt-3">Born Date:</label>
                        <div class="form-group">
                            <input type="date" id="1" required name="born_date" class="form-control" value="{{$user->born_date}}">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fa fa-at mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your Mail:</label>
                            <input type="email" name="mail" required class="form-control" value="{{$user->mail}}">
                        </div>
                    </div>
                    <i class="fa fa-phone mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your Phone: (ex:05379307038)</label>
                            <input type="tel" required name="phone" class="form-control" value="{{$user->phone}}">
                        </div>
                    </div>
                    <i class="fa fa-map-marker-alt mt-4"></i>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your Location (ex: New York, USA)</label>
                            <input type="text" name="location" class="form-control" required value="{{$user->location}}">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fa fa-code-branch mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your skill with percentage (ex: C# 75)</label>
                            <input type="text" name="skill_1" required class="form-control" value="{{$user->skill_1}}">
                        </div>
                    </div>
                    <i class="fa fa-code-branch mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your skill with percentage (ex: Photoshop 45)</label>
                            <input type="text" name="skill_2" required class="form-control" value="{{$user->skill_2}}">
                        </div>
                    </div>
                    <i class="fa fa-code-branch mt-4"></i>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your skill with percentage (ex: PHP 67)</label>
                            <input type="text" name="skill_3" required class="form-control" value="{{$user->skill_3}}">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fa fa-code-branch mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your skill with percentage (ex: Java 25)</label>
                            <input type="text" name="skill_4" required class="form-control" value="{{$user->skill_4}}">
                        </div>
                    </div>
                    <i class="fa fa-code-branch mt-4"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="bmd-label-floating">Your skill with percentage (ex: CSS 87)</label>
                            <input type="text" name="skill_5" required class="form-control" value="{{$user->skill_5}}">
                        </div>
                    </div>
                    <i class="fa fa-image mt-4"></i>
                    <div class="col-md-3">
                        <label class="bmd-label-floating mt-4">Update Your Image: (500x425)</label>
                        <div class="form-control">
                            <input type="file" name="img">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fas fa-images mt-4 ml-2"></i>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Your Theme:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="theme">
                                <option style="color: black" @php($user->theme =='PERSONEL WEB SIDE 1' ? "selected" : null)>PERSONEL WEB SIDE 1</option>
                                <option style="color: black" @php($user->theme =='PERSONEL WEB SIDE 2' ? "selected" : null)>PERSONEL WEB SIDE 2</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <i class="fa fa-image mt-1 ml-2"></i>
                    <div class="col-md-4">
                        <label class="bmd-label-floating">Your Image:</label>
                        <div class="form-group">
                            <img width="100" src="/images/users/{{$user->user_img}}" alt="">
                        </div>
                    </div>
                </div>



                <br><br>
                <input type="hidden" name="old_file" value="{{$user->user_img}}">
                <button type="submit" class="btn btn-primary pull-left mb-5">UPDATE PROFILE</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
@endsection
