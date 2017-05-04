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

                        <div class="col-auto offset-8 text-right mr-2">
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
                            <table class="table">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th>نام</th>
                                    <th>پست الکترونیکی</th>
                                    <th>تلفن همراه</th>
                                    <th>وضعیت</th>
                                    <th>
                                    </th>
                                </tr>

                                </thead>
                                <tbody>
                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                                <div class="dropdown-divider my-1"></div>
                                                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    {{--==========[ Table Row items ]========= --}}
                                    <td><input type="checkbox"></td>
                                    <td class="py-1 text-right userInfoPlace">
                                        <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
                                        <p class="username">CyrusGreat</p>
                                    </td>
                                    <td>سبحان اسکندری</td>
                                    <td>serprofessional@gmail.com</td>
                                    <td>۰۹۲۲۲۲۲۲۲۲۲</td>
                                    <td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

                                    {{--==========[ More Button Dropdown ]========= --}}
                                    <td>
                                        <div class="Topbar_dropdown dropdown table_dropDown">
                                            <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
                                            </button>
                                            {{--==========[ Dropdown Menu ]========= --}}
                                            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                                                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
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