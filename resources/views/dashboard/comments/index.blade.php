@extends('layouts.main')
@section('search')
    <div class="hi-search-1">
        {!! Form::open(['method'=>'GET', 'action'=>'CommentController@index']) !!}
        {!! Form::text('query', isset($_GET['query'])? $_GET['query'] : '', ['class' => 'hi-search_field', 'placeholder'=>'جست و جو کنید...', 'id'=>'searchCmt']) !!}
        <button class="hi-button-btn1 pull-left" id="cmtSearch"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>
        {!! Form::close() !!}
    </div>
@endsection
@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid" id="categories">
                    @include('Includes.AllComments')
                </div>
            </div>
        </div>
    </section>

    <script>
        var collect = {};
        $('#searchCmt').keyup(function (e) {
            collect['query'] = $('#searchCmt').val();
            if(collect['query'].length >=3 || e.keyCode===8){
                $.ajax({
                    url: '/comments',
                    data: collect
                }).done(function (data) {
                    console.log(data);
                    $('#categories').html(data);
                    window.history.pushState(data, "Title"," /comments?query="+collect['query']);
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
//                window.history.pushState('', "Title"," /comments?query="+collect['query']);

        });
    </script>
@endsection

