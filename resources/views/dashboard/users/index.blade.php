@extends('layouts.main')
@section('search')
    <div class="hi-search-1">
        {!! Form::open(['method'=>'GET', 'action'=>'API\UserController@index']) !!}
        {!! Form::text('query', isset($_GET['query'])? $_GET['query'] : '', ['class' => 'hi-search_field', 'placeholder'=>'جست و جو کنید...', 'id'=>'searchUser']) !!}
        <button class="hi-button-btn1 pull-left" id="userSearch"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>
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
                <div class="container-fluid" id="user">
                    @include('Includes.AllUsers')
                </div>
            </div>
        </div>
    </section>


    <script>
        var collect = {};
        $('#searchUser').keyup(function (e) {
            collect['query'] = $('#searchUser').val();
            if(collect['query'].length >=3 || e.keyCode===8){
                $.ajax({
                    url: '/users',
                    data: collect
                }).done(function (data) {
                    console.log(data);
                    $('#user').html(data);
                    if(collect['query'] === "") {
                        window.history.pushState("", "", "/users");
                    }else {
                        window.history.pushState(data, "Title", " /users?query=" + collect['query']);
                    }
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
        });
    </script>
@endsection