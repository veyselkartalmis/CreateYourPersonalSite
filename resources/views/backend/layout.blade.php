<html lang="en" class="perfect-scrollbar-on"><link type="text/css" id="dark-mode" rel="stylesheet" href=""><style type="text/css" id="dark-mode-custom-style"></style><head><link type="text/css" id="dark-mode" rel="stylesheet" href=""><style type="text/css" id="dark-mode-custom-style"></style>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="/backend/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/backend/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Create Your Personel Web Side
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/20b45354f8.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="/backend/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/backend/assets/demo/demo.css" rel="stylesheet">
    <style></style><style></style></head>

    <script src="/backend/assets/js/core/jquery.min.js"></script>
    <!-- ALERTFY JS -->
    <script src="/backend/alertify/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="/backend/alertify/css/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="/backend/alertify/css/themes/default.min.css" />
    <!-- ALERTFY JS -->

<body class="dark-edition" cz-shortcut-listen="true">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="/backend/assets/img/sidebar-2.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.instagram.com/veyselkartalmis" target="_blank" class="simple-text logo-normal">
                Veysel <strong style="color: white">KARTALMIS</strong>
            </a></div>
        <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="db41247d-a8ab-f15a-c4fb-69929fa73c76">
            <ul class="nav">
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("addShow")}}">
                        <i class="material-icons">create</i>
                        <p style="font-size: 17px; color: white">Create Profile</p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("showProfiles")}}">
                        <i class="material-icons">supervised_user_circle</i>
                        <p style="font-size: 17px; color: white">Profiles</p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{route("showThemes")}}">
                        <i class="material-icons">photo_library</i>
                        <p style="font-size: 17px; color: white">Themes</p>
                    </a>
                </li>
            </ul>
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <div class="sidebar-background" style="background-image: url(/backend/assets/img/sidebar-2.jpg) "></div><div class="sidebar-background" style="background-image: url(/backend/assets/img/sidebar-2.jpg) "></div></div>
    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="38354e50-7dcb-a6c7-560d-bf1519d64000">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" style="color: white; font-size: 18px;" href="javascript:void(0)">@yield("title")</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield("content")
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.instagram.com/veyselkartalmis" target="_blank">
                                Veysel Kartalmis
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right" id="date">
                    , made with <i class="material-icons" style="color: red">favorite</i> by
                    <a href="https://www.instagram.com/veyselkartalmis" target="_blank">Veysel Kartalmis</a> for a better web.
                </div>
            </div>
        </footer>
        <script>
            const x = new Date().getFullYear();
            let date = document.getElementById('date');
            date.innerHTML = '&copy; ' + x + date.innerHTML;
        </script>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px; height: 663px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 380px;"></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 663px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 392px;"></div></div></div>
</div>

<!--   Core JS Files   -->
<script src="/backend/assets/js/core/popper.min.js"></script>
<script src="/backend/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="/backend/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
<!-- Chartist JS -->
<script src="/backend/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/backend/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/backend/assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/backend/assets/demo/demo.js"></script>

{{-- YAPILAN VE YÖNLENDİRİLEN TÜM İŞLEMLER İÇİN BURADA GERİ DÖNÜŞ MESAJI VERİYORUM --}}

@if(session()->has("success"))
    <script> alertify.success("{{session("success")}}") </script>
@endif
@if(session()->has("error"))
    <script> alertify.error("{{session("error")}}") </script>
@endif

{{-- TÜM VALIDATE HATALARINI YAKALAYIP ALERTIFY İLE BASIYORUM --}}
@foreach($errors->all() as $error)
    <script> alertify.error("{{$error}}") </script>
@endforeach

</body></html>
