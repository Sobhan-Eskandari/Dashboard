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
                            <table class="posts_trashTable">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th class="pl-0">
                                        <div class="pure-checkbox mt-2">
                                            <input id="selectAllPost" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
                                            <label for="selectAllPost"></label>
                                        </div>
                                    </th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th>نویسنده</th>
                                    <th>دسته بندی ها</th>
                                    <th>برچسب ها</th>
                                    <th>تاریخ</th>
                                    <th>
                                    </th>
                                </tr>

                                </thead>
                                <tbody>

                                @for ($i = 0; $i < 8; $i++)
                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.AllPostTableRow')

                                        @slot('chk_name')
                                            {{ $i }}
                                        @endslot

                                        @slot('post_name')
                                            پرسشنامه هوش مصنوعی
                                        @endslot

                                        @slot('post_editedBy')
ویرایش شده توسط نیما شیرین زاده در ۹۶/۶/۶
                                        @endslot

                                        @slot('post_author')
                                            سبحان اسکندری
                                        @endslot

                                        @slot('post_category')
                                            محتوای علمی و ...
                                        @endslot

                                        @slot('post_tag')
                                           علمی - هوش مصنوعی - آموزش
                                        @endslot

                                        @slot('post_date')
                                            ۱۳۹۶/۳/۳
                                        @endslot

                                        @slot('post_commentsCount')
                                            ۲۵
                                        @endslot

                                        @slot('post_views')
                                            ۱۰۰
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