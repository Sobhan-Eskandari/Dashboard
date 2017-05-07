@extends('layouts.main')

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

                        <div class="col-auto offset-9 text-right mr-2">
                            <button class="hi-button-simple hi-shadow-0 red darken-3 text-right">حذف</button>
                        </div>

                        <div class="col-auto ml-2 text-right">
                            <button class="hi-button-simple hi-shadow-0 green darken-3">ایجاد</button>
                        </div>
                    </div>

                    {{--==========[ Table Of Users ]========= --}}
                    <div class="row mt-3">
                        <div class="col-12 px-0">
                            <table class="table">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                </thead>
                                <tbody>

                                <tr>
                                    {{--==========[ Gallery Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-center">
                                        <div class="userInfoPlace">
                                            <img class="rounded img-fluid hi-size-7" src="{{ asset('images/avatar.png') }}">
                                            <div>
                                                <p class="username mt-3"> این بخش نسبتا کوچک در میان سطح داخلی نئوکورتکس در مرکز مغز پنهان شده </p>
                                                <p class="grey-text hi-fontSize-12 text-right pr-2">توسط حمید وتر ایجاد شده در : ۹۶/۶/۶</p>
                                            </div>

                                        </div>
                                    </td>

                                    {{--==========[ More Button ]========= --}}
                                    <td class="px-1">
                                        <div class="Topbar_dropdown dropdown slider_table_dropDown">

                                            <button class="btn btn-secondary dropdown-toggle py-0 px-0 pr-2 black-text" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                ۴
                                                <i class="fa fa-chevron-down white-text grey py-1 px-1 mr-1 hi-fontSize-15" aria-hidden="true"></i>
                                            </button>

                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div class="dropdown-menu hi-shadow-2 py-1" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right mt-1 py-0" href="#">۴</a>
                                                <div class="dropdown-divider mb-1 mt-1"></div>
                                                <a class="dropdown-item text-right my-0 py-0" href="#">۴</a>
                                                <div class="dropdown-divider mb-1 mt-1"></div>
                                                <a class="dropdown-item text-right my-0 py-0" href="#">۴</a>
                                            </div>
                                        </div>
                                    </td>

                                    {{--==========[ More Button ]========= --}}
                                    <td class="px-1">
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i>ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

@endsection