@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <section class="adminsSection">

        {{--==========[ Row of buttons abpve table ]=========--}}
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-1 push-11 ml-2 text-right">
                    <button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>
                </div>
            </div>

            <div id="loadAdmins">
                @include('Includes.AllAdminsTrash')
            </div>
        </div>

    </section>
@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/adminTrashIndex.js') }}"></script>
@endsection
{{--@extends('layouts.main')--}}

{{--@section('breadcrumb')--}}
    {{--@component('components.Breadcrumb')--}}

    {{--@endcomponent--}}
{{--@endsection--}}

{{--@section('content')--}}

    {{--<section class="usersSection">--}}
        {{--<div class="row">--}}
            {{--<div class="col-12 bgCard hi-shadow-2">--}}
                {{--<div class="container-fluid">--}}

                    {{--==========[ Row of buttons abpve table ]========= --}}
                    {{--<div class="row">--}}
                        {{--<div class="col-1 push-11 ml-2 text-right">--}}
                            {{--<button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--==========[ Table Of Users ]========= --}}
                    {{--<div class="row mt-3">--}}
                        {{--<div class="col-12 px-0">--}}
                            {{--<table class="admins_trashTable">--}}
                                {{--<thead class="table_tableHeader white-text">--}}

                                {{--==========[ Table Headers ]========= --}}
                                {{--<tr>--}}
                                    {{--<th><input type="checkbox"></th>--}}
                                    {{--<th class="text-right">علامت زدن همه</th>--}}
                                    {{--<th>نام</th>--}}
                                    {{--<th>پست الکترونیکی</th>--}}
                                    {{--<th>تلفن همراه</th>--}}
                                    {{--<th>نقش</th>--}}
                                    {{--<th></th>--}}
                                {{--</tr>--}}

                                {{--</thead>--}}
                                {{--<tbody>--}}

                                {{--==========[ Table Row ]========= --}}
                                {{--<tr>--}}
                                    {{--@component('components.AdminTrashTableRow')--}}

                                        {{--@slot('chk_name') 1 @endslot--}}

                                        {{--@slot('admin_username')--}}
                                            {{--Serpro--}}
                                        {{--@endslot--}}

                                        {{--@slot('admin_fullname')--}}
                                            {{--سبحان اسکندری--}}
                                        {{--@endslot--}}

                                        {{--@slot('admin_email')--}}
                                            {{--serprofessional@gmail.com--}}
                                        {{--@endslot--}}

                                        {{--@slot('admin_number')--}}
                                            {{--۰۹۱۱۲۳۴۴۴۴۴--}}
                                        {{--@endslot--}}

                                        {{--@slot('admin_role')--}}
                                            {{--مدیر کل--}}
                                        {{--@endslot--}}

                                        {{--@slot('trash')--}}
                                            {{--yes--}}
                                        {{--@endslot--}}

                                    {{--@endcomponent--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--============[ Pagination of Page ]===========--}}
                    {{--<div class="row mt-4">--}}
                        {{--<div class="col-auto">--}}
                            {{--<nav aria-label="Page navigation example">--}}
                                {{--<ul class="pagination">--}}
                                    {{--<li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">۱</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">۲</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link" href="#">۳</a></li>--}}
                                    {{--<li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>--}}
                                {{--</ul>--}}
                            {{--</nav>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

{{--@endsection--}}