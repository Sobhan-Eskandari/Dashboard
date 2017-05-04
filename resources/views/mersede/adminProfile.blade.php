<!DOCTYPE html>
<html lang="fa" alt="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>adminProfile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Resources/css/Bootstrap/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="Resources/css/Font/font-awesome.min.css">
    <!-- Font CSS -->
    <link rel="stylesheet" href="Resources/css/Font/fontiran.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="Mersede/css/application.css">

</head>
<body class="px-5 pt-5">
<div class="container-fluid">
    <div class="row">
        <div class="col hi-subjectDashboardAdminProfile">
            <h5 class="hi-subjectDashboardAdminProfile_h5">تاریخ ثبت نام<span> &nbsp;|&nbsp; </span>تاریخ آخرین ویرایش
                اطلاعات : 1396/5/20</h5>
        </div>
    </div>
    <form>
        <div class="row">
            <div class="col-4  mt-3">

                @component('Mersede/profileCard')
                @slot('characterName')
                حمید وتر
                @endslot
                @endcomponent

            </div>
            <!-- about me -->
            <div class="col-8 mt-3">

                @component('Mersede/personalInformationCard')
                @slot('cardSubject')
                درباره من:
                @endslot
                @endcomponent

            </div>
        </div>
    </form>
    <div class="row pr-3 mt-5">
        <button class="btn hi-confirmButtonDashboard" type="submit">تایید</button>
    </div>
</div>


<!-- jQuery first, then Tether, then Bootstrap JS , then local JS -->
<script src="Resources/js/Jquery/jquery-3.2.0.min.js"></script>
<script src="Resources/js/Bootstrap/tether.min.js"></script>
<script src="Resources/js/Bootstrap/bootstrap.min.js"></script>
<script src="Mersede/js/jquery.easydropdown.js"></script>

</body>
</html>