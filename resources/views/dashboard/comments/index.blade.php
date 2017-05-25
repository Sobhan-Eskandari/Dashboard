@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid">

                    {{--==========[ Row of buttons abpve table ]========= --}}
                    <div class="row">
                        <div class="col-1 pl-0">
                            <button class="hi-button-btn1 orange darken-2 hi-shadow-1 hi-size-4">
                                <i class="fa fa-trash white-text hi-fontSize-20" aria-hidden="true"></i>
                            </button>
                        </div>

                        <div class="col-2">
                            <div class="Topbar_dropdown posts_dropdown dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    همه ی دسته بندی ها
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

                        <div class="col-auto offset-6 text-right mr-2">
                            <button class="hi-button-simple hi-shadow-0 red darken-3 text-right">حذف</button>
                        </div>

                        <div class="col-auto text-right">
                            <button class="hi-button-simple hi-shadow-0 blue darken-1">ویرایش</button>
                        </div>

                        <div class="col-auto ml-2 text-right">
                            <button class="hi-button-simple hi-shadow-0 green darken-3">ایجاد</button>
                        </div>
                    </div>

                    {{--==========[ Table Of Users ]========= --}}
                    <div class="row mt-3">
                        <div class="col-12 px-0">
                            <table class="comments_table">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th class="pl-0">
                                        <div class="pure-checkbox mt-2">
                                            <input id="selectAllComments" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
                                            <label for="selectAllComments"></label>
                                        </div>
                                    </th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th width="50%">متن</th>
                                    <th>محتوا</th>
                                    <th>زمان</th>
                                    <th>وضعیت</th>
                                    <th></th>
                                </tr>

                                </thead>
                                <tbody>

                                @for ($i = 0; $i < 8; $i++)
                                    {{--==========[ Table Row ]========= --}}
                                    <tr>
                                        @component('components.CommentsTableRow')

                                            @slot('chk_name')
                                                {{ $i }}
                                            @endslot

                                            @slot('comment_author')
                                                حمید وتر
                                            @endslot

                                            @slot('comment_text')
                                                جهت دسترسی به قابلیت های پیشرفته مانند پخش ویدئو، شبکه های مورد علاقه و شناسه های کاربری، ...
                                            @endslot

                                            @slot('comment_content')
                                                داده کاوی
                                            @endslot

                                            @slot('comment_time')
                                                ۲۲:۳۰
                                            @endslot

                                            @slot('comment_date')
                                                ۹۵/۳/۴
                                            @endslot

                                            @slot('trash')@endslot

                                        @endcomponent
                                    </tr>
                                @endfor


                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--============[ Pagination of Page ]===========--}}
                    <div class="row mt-4">
                        <div class="col-auto">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                    <li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection