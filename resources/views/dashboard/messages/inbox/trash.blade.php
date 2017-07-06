@extends('layouts.main')

{{--@section('search')--}}
    {{--<div class="hi-search-1">--}}
        {{--{!! Form::open(['method'=>'GET', 'action'=>'InboxController@trash']) !!}--}}
        {{--{!! Form::text('query', isset($_GET['query'])? $_GET['query'] : '', ['class' => 'hi-search_field', 'placeholder'=>'جست و جو کنید...', 'id'=>'search']) !!}--}}
            {{--<button class="hi-button-btn1 pull-left" id="loading"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>--}}
        {{--{!! Form::close() !!}--}}
    {{--</div>--}}
{{--@endsection--}}

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid" id="loadInboxes">
                    @include('Includes.AllInboxesTrash')
                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/inboxTrashIndex.js') }}"></script>
@endsection