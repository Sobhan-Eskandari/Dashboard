@extends('layouts.main')

@section('search')
    <div class="hi-search-1">
        {!! Form::open(['method'=>'GET', 'action'=>'InboxController@index']) !!}
        {!! Form::text('query', isset($_GET['query'])? $_GET['query'] : '', ['class' => 'hi-search_field', 'placeholder'=>'جست و جو کنید...', 'id'=>'search']) !!}
            <button class="hi-button-btn1 pull-left" id="loading"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>
        {!! Form::close() !!}
    </div>
@endsection

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <nav dir="rtl">
        @component('components.errors') @endcomponent
        @component('components.flash') @endcomponent
    </nav>

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid">

                    {{--==========[ Row of buttons abpve table ]========= --}}
                    <div class="row">
                        <div class="col-1 pl-0">
                            <a class="hi-button-btn1 orange darken-2 hi-shadow-1 hi-size-4" href="{{ route('inbox.trash') }}">
                                <i class="fa fa-trash white-text hi-fontSize-20" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="col-2">
                            <div class="Topbar_dropdown posts_dropdown dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    همه ی زمان ها
                                </button>
                                <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                                    <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                                    <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto offset-8 text-right mr-2">
                            {!! Form::open(['method'=>'POST', 'action'=>'InboxController@multiDestroy', 'id'=>'deleteForm']) !!}
                                <button id="multiDestroy" type="button" class="hi-button-simple hi-shadow-0 red darken-3 text-right">حذف</button>
                            {!! Form::close() !!}
                        </div>

                    </div>

                    <div id="loadInboxes">
                        @include('Includes.AllInboxes')
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/InboxIndex.js') }}"></script>
@endsection