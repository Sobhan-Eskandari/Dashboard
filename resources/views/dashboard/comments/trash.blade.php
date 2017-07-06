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
                        <div class="col-1 push-11 ml-2 text-right">
                            <button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>
                        </div>
                    </div>

                    {{--==========[ Table Of Users ]========= --}}
                    <div class="row mt-3">
                        <div class="col-12 px-0">
                            <table class="comments_trashTable">
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


                                {{--==========[ Table Row ]========= --}}

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

                                            @slot('trash')
                                                yes
                                            @endslot

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