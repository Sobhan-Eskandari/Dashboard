@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <div class="row">
        {!! Form::open(['method'=>'POST','action'=>'API\UserController@photo','files'=>'true','id'=>'uploadForm']) !!}
        {!! Form::file('avatar') !!}
        {!! Form::submit('ارسال') !!}
        {!! Form::close() !!}
        <div class="col hi-subjectDashboardAdminProfile text-right" id="test">
            {{--<h5 class="hi-subjectDashboardAdminProfile_h5">تاریخ ثبت نام<span> &nbsp;|&nbsp; </span>تاریخ آخرین ویرایش--}}
                {{--اطلاعات : 1396/5/20</h5>--}}
        </div>
    </div>

    {!! Form::model($user,['method'=>'POST','action'=>['API\UserController@update',$user->id]]) !!}
        <div class="row">
            <!-- about me -->
            <div class="col-8 mt-3">

                @component('components.editUserInfoCard')
                    @slot('header_color')
                        blue-grey darken-1
                    @endslot

                    @slot('cardSubject')
                        :درباره کاربر
                    @endslot
                @endcomponent

            </div>

            <div class="col-4 mt-3">

                @component('components.editUsersInfoCard')
                    @slot('header_color')
                        blue-grey darken-1
                    @endslot
                @slot('photo')
                            @include('Includes.UserImage')
                    @endslot

                    @slot('characterName')
                      {{--سبحان اسکندری--}}
                   {{$user->getFullNameAttribute()}}
                    @endslot
                @endcomponent

            </div>
        </div>
    <div class="row pr-5 mt-5">
        <div class="col-3 push-11">
            <button class="btn hi-confirmButtonDashboard light-blue darken-2" type="submit">تایید</button>
        </div>
    </div>
    {!! Form::close() !!}
<script>
$('#uploadForm').submit(function(e){
    e.preventDefault();
    var avatarId = $('#avatar').val();
    var formData = new FormData(this)
    if(avatarId !== "") {
        formData.append('avatarId', avatarId);
    }
    $.ajax({
            type: 'POST',
            url: '/photo',
            processData: false,
            contentType: false,
            data: formData
        }).done(function (data) {
            $("#img").html(data);
//            console.log(query);
//            if(query === "") {
//                window.history.pushState("", "", "http://dash.dev/users");
//            }else {
//                window.history.pushState(data, "Title", " /users?query=" + query);
//            }
        }).fail(function () {
        });
});
</script>
@endsection