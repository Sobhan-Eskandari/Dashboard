<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../favicon.ico">--}}

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Bootstrap/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/application.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('Resources/css/Font/font-awesome.min.css') }}">

    <!-- Hi_Frameworkwork Styles -->
    <link rel="stylesheet" href="{{ asset('Hi_Framework/dist/Hi_Framework.css') }}">

    {{--on pages we wanna user bootstrap-select the following should be included--}}
    {{--<link rel="stylesheet" href="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.css') }}">--}}

</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 Topbar px-0 hi-shadow-2">
            <div class="Topbar_paddings">
                <div class="row Topbar_rowOfItems">

                    {{--============[ navbar button in topbar ]===========--}}
                    <div class="col-1 Topbar_button pl-0">
                        <i class="fa fa-bars fa-2x text-white" aria-hidden="true"></i>
                    </div>

                    {{--============[ Profile icon in topbar ]===========--}}
                    <div class="col-1 text-right Topbar_avatar_container px-0">
                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                    </div>

                    {{--============[ Profile dropdown in topbar ]===========--}}
                    <div class="col-2 Topbar_dropdown_container">
                        <div class="Topbar_dropdown dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                حمید وتر
                            </button>
                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                            </div>
                        </div>

                    </div>

                    {{--============[ Search in topbar ]===========--}}
                    <div class="col-4 pull-3 pt-2">
                        <div class="hi-search-1">
                            <input placeholder="جست و جو کنید..." class="hi-search_field" type="text">
                            <button class="hi-button-btn1 pull-left"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    {{--============[ Notifications in topbar ]===========--}}
                    <div class="col-1 pull-3 pt-0">
                        <button class="hi-button-btn1 Topbar_notificationBtn pull-left pt-3 px-2">
                            <span class="badge badge-pill badge-danger">۱۰۰</span>
                            <i class="fa fa-envelope-o white-text hi-fontSize-23" aria-hidden="true"></i>
                        </button>
                    </div>

                    {{--============[ Logout in topbar ]===========--}}
                    <div class="col-1 pull-3 pt-2">
                        <button class="hi-button-btn1 Topbar_logoutBtn py-1 px-2">
                            <i class="fa fa-power-off white-text hi-fontSize-23" aria-hidden="true"></i>
                        </button>
                    </div>



                </div>
            </div>
        </div>
        <div class="col-2 Sidebar">
            <div class="Sidebar__paddings">

            </div>
        </div>

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->

<script src="{{ asset('Resources/js/Jquery/jquery-3.2.0.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/tether.min.js') }}"></script>
<script src="{{ asset('Resources/js/Bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Waves/waves.min.js') }}"></script>
<script src="{{ asset('Hi_Framework/css/Animation/Other Libraries/Animate/tutorial.js') }}"></script>

<script type="text/javascript">
    Waves.attach('#dropdownMenuButton',['waves-button', 'waves-float', 'waves-light']);
    Waves.attach('button',['waves-float', 'waves-light']);
    Waves.attach('.dropdown-item');
    Waves.init();
</script>

{{--on pages we wanna user bootstrap-select the following should be included--}}
{{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="{{ asset('Hi_Framework/components/Dropdown/Other Libraries/bootstrap-select/bootstrap.min.js') }}"></script>--}}

</body>
</html>
