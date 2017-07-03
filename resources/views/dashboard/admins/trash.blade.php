{{--@extends('layouts.main')--}}

{{--@section('breadcrumb')--}}
    {{--@component('components.Breadcrumb')--}}

    {{--@endcomponent--}}
{{--@endsection--}}

{{--@section('content')--}}
    {{--<section class="adminsSection">--}}

        {{--==========[ Row of buttons abpve table ]=========--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row mt-2">--}}
                {{--<div class="col-1 push-11 ml-2 text-right">--}}
                    {{--<button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div id="loadAdmins">--}}
                {{--@include('Includes.AllAdminsTrash')--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</section>--}}
{{--@endsection--}}

@section('javascript')
    <script src="{{ asset('js/dashboard/adminTrashIndex.js') }}"></script>
@endsection

@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid" id="loadAdmins">
                    @include('Includes.AllAdminsTrash')
                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/adminTrashIndex.js') }}"></script>
@endsection