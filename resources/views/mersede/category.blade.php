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
<body class="px-4 pt-4">
<div class="container-fluid">
    <div class="hi-whiteCategoryDashboardBox">
        <div class="row p-5">
            <div class="col-4">
                <div class="row">
                    <div class="form-group">
                        <label for="hi-whiteCategoryDashboardBox_input"><h5>برچسب:</h5></label>
                        <input type="email" class="form-control hi-whiteCategoryDashboardBox_input">
                    </div>
                </div>
                <div class="row pr-1 pl-0">
                        <button class="btn hi-whiteCategoryDashboardBox_button" type="submit">تایید</button>
                </div>

            </div>
            <div class="col-8">
                <div class="row">
                    <table class="table hi-roundedDashboardTagsTable">
                        <thead class="hi-roundedDashboardTagsTable_thead">
                        <tr>
                            <td class="pt-4 hi-roundedDashboardTagsTable_thead_tr_td_r"><h5>برچسب ها</h5></td>
                            <td></td>
                            <td class="pl-4 hi-roundedDashboardTagsTable_thead_tr_td_l">
                                <button type="button" class="btn pull-left pt-2 pb-1 mt-1
                                 hi-roundedDashboardTagsTable_thead_tr_td_button">حذف
                                </button>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @component('Mersede/tagsRow')
                        @slot('style')@endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')
                        background-color:#d9dfe9;
                        @endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')@endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')
                        background-color:#d9dfe9;
                        @endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')@endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')
                        background-color:#d9dfe9;
                        @endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')@endslot
                        @slot('style2')@endslot
                        @slot('style3')@endslot
                        @endcomponent

                        @component('Mersede/tagsRow')
                        @slot('style')
                        background-color:#d9dfe9;
                        @endslot

                        @slot('style2')
                        border-bottom-right-radius: 10px;
                        @endslot

                        @slot('style3')
                        border-bottom-left-radius: 10px;
                        @endslot
                        @endcomponent

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <nav class="mt-4 dashboardPaginatinBs">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link px-4" href="#">قبلی</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">۱<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">۲</a></li>
                            <li class="page-item"><a class="page-link" href="#">۳</a></li>
                            <li class="page-item"><a class="page-link" href="#">۴</a></li>
                            <li class="page-item"><a class="page-link" href="#">۵</a></li>
                            <li class="page-item pull-right"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>


<!-- jQuery first, then Tether, then Bootstrap JS  -->
<script src="Resources/js/Jquery/jquery-3.2.0.min.js"></script>
<script src="Resources/js/Bootstrap/tether.min.js"></script>
<script src="Resources/js/Bootstrap/bootstrap.min.js"></script>


</body>
</html>