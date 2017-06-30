@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <nav dir="rtl">
        @component('components.flash') @endcomponent
    </nav>

    <section class="adminsSection">

        {{--==========[ Row of buttons abpve table ]=========--}}
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-1 push-9 ml-5">
                    <button class="hi-button-btn1 orange ml-5 darken-2 hi-shadow-1 hi-size-4">
                        <i class="fa fa-trash white-text  hi-fontSize-20" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="col-1 push-9">
                    <a href="{{ route('admins.create') }}" class="hi-button-simple hi-shadow-0 ml-4 green darken-3">ایجاد</a>
                </div>
            </div>

            <div id="loadAdmins">
                @include('Includes.AllAdmins')
            </div>
        </div>

    </section>
@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/adminIndex.js') }}"></script>
@endsection