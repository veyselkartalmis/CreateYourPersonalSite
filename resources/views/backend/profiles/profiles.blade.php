@extends("backend.layout")
@section("title") <strong>PROFILES</strong>@endsection
@section("content")

    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title mt-0">PROFILES YOU SAVED</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                        <tr>
                            <th  style="color: white; font-size: large;">
                                <strong>ID</strong>
                            </th>
                            <th  style="color: white; font-size: large;">
                               <strong>Name and Surname</strong>
                            </th>
                            <th  style="color: white; font-size: large;">
                                <strong>Job</strong>
                            </th >
                            <th  style="color: white; font-size: large;">
                                <strong>Born Date</strong>
                            </th>
                            <th  style="color: white; font-size: large;">
                                <strong>Phone</strong>
                            </th>
                            <th  style="color: white; font-size: large;"></th>
                            <th  style="color: white; font-size: large;"></th>
                            <th  style="color: white; font-size: large;">
                                GO
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user["profile"] as $profile)
                        <tr id="item-{{$profile->id}}">
                            <td>
                                {{$profile->id}}
                            </td>
                            <td>
                                {{$profile->name}}
                            </td>
                            <td>
                                {{$profile->job}}
                            </td>
                            <td>
                                {{$profile->born_date}}
                            </td>
                            <td>
                                {{$profile->phone}}
                            </td>
                            <td>
                                <a href="{{route("profilEdit", $profile->id)}}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    <span id="{{$profile->id}}" class="material-icons delete">delete</span>
                                </a>
                            </td>
                            <td>
                                <a href="{{route("show", [$profile->id, $profile->theme])}}" target="_blank">
                                    <span class="material-icons">language</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        {{-- DELETE İŞLEMİ İÇİN YAZILAN FONKSİYON --}}
        $(".delete").click(function(){
            destroy_id = $(this).attr("id");
            alertify.confirm("Are you sure?","This action cannot be undone!",
                function () {
                    location.href = "/delete/" + destroy_id;
                },
                function () {
                    alertify.error("CANCELED");
                }
            )
        });
        {{-- DELETE İŞLEMİ İÇİN YAZILAN FONKSİYON --}}
    </script>
@endsection
@section("css")@endsection
@section("js")@endsection
