@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection

@section('content')

    @component('components.errors') @endcomponent

    <div class="row hi-createPostBox">
        <div class="col-8">
            {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'files' => true]) !!}
                <div class="row">
                    <div class="form-group makeCreatePostTitleBox">
                        {!! Form::label('title', 'ایجاد پست جدید', ['class' => 'createPostLabel']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control makeCreatePostTitle', 'placeholder'=>'عنوان پست را وارد کنید']) !!}
                    </div>
                </div>
                <br>
                <div class="row">
                    {{--============[ Right box without image ]===========--}}
                    <div class="col-10">
                        <div class="row pr-0">
                            <div class="col-6 pr-0 pt-3">
                                {!! Form::label('body', 'متن پست را وارد کنید:', ['class' => 'pull-right createPostLabel']) !!}
                            </div>
                            <div class="col-6 pl-0">
                                <button type="button" data-toggle="modal" data-target="#galleryModal" class="btn btn-primary pull-left mb-2 createPostAddFileButton">
                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                    افزودن فایل
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            {!! Form::textarea('body', null, ['class'=>'form-control writeCreatePostBox', 'rows'=>'10']) !!}
                        </div>
                        <script>
                            CKEDITOR.replace('body');
                        </script>
                        <br>
                        <div class="row">
                            {!! Form::submit('انتشار', ['class'=>'btn btn-primary createPostPublicationButton px-4 light-blue darken-2']) !!}
                        </div>
                    </div>
                    {{--============[ image box ]===========--}}
                    <div class="col-2 pr-0">
                        <br><br>
                        <img src="{{asset('images/nobody_m.original.jpg')}}" alt="در حال بارگذاری عکس" class="createPostImage mr-2">
                    </div>
                </div>
            {!! Form::close() !!}
        </div>

        <div class="col-4 mt-1">
            <br>
            {{--<div class="row">--}}
                {{--<ul class="list-group hi-infoPostListGroup">--}}
                    {{--<li class="list-group-item justify-content-between pl-4 pr-3 flip py-2" id="hi-infoPostListGroupFlip">--}}
                        {{--اطلاعات پست--}}
                        {{--<i class="fa fa-caret-down pull-left" aria-hidden="true"></i>--}}
                    {{--</li>--}}
                    {{--<div id="hi-infoPostListGroupPanel" class="panel">--}}
                        {{--<li class="list-group-item justify-content-between list-group-item_border">--}}
                            {{--<button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نویس</button>--}}
                            {{--<button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نمایش--}}
                            {{--</button>--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; 25 بازدید</li>--}}
                        {{--<li class="list-group-item"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;10 نظر</li>--}}
                        {{--<li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;1396/5/25--}}
                        {{--</li>--}}
                        {{--<li class="list-group-item">ایجاد شده توسط:حمید وتر</li>--}}
                        {{--<li class="list-group-item">تعداد ویرایش&nbsp;<span--}}
                                    {{--class="badge badge-pill badge-default">1</span></li>--}}
                        {{--<li class="list-group-item">آخرین ویرایش : 1396/6/25 - حمید وتر</li>--}}
                    {{--</div>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <br>

            <div class="row">
                @component('components.CreatePostLeftSidebar')
                    @slot('title') دسته بندی ها @endslot
                    @slot('list')
                        @foreach($categories as $category)
                            <li class="list-group-item justify-content-between ">
                                <label class='hi-categoryListGroup_li_square-checkbox'>
                                    <input type='checkbox' class="pull-right" id="tag-{{ $category->id }}">
                                    &nbsp;
                                    <span>{{ $category->category }}</span>
                                </label>
                                <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </li>
                        @endforeach
                    @endslot
                    @slot('create_form')
                        <form class="form-inline TodoWidget l-ltr">
                            <div class="input-group" id="addTodo">
                                <button type="submit" id="addTodo_addBtn"><img class="img-fluid" src="{{asset('images/Add-icone.png')}}"></button>
                                {!! Form::text('category', null, ['class' => 'form-control', 'id'=>'todoText', 'placeholder'=>'دسته بندی جدید']) !!}
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>

            <br>

            <div class="row">
                @component('components.CreatePostLeftSidebar')
                    @slot('title') برچسب ها @endslot
                    @slot('list')
                        @foreach($tags as $tag)
                            <li class="list-group-item justify-content-between ">
                                <label class='hi-categoryListGroup_li_square-checkbox'>
                                    <input type='checkbox' class="pull-right" id="tag-{{ $tag->id }}">
                                    &nbsp;
                                    <span>{{ $tag->name }}</span>
                                </label>
                                <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </li>
                        @endforeach
                    @endslot
                    @slot('create_form')
                        <form class="form-inline TodoWidget l-ltr">
                            <div class="input-group" id="addTodo">
                                <button type="submit" id="addTodo_addBtn"><img class="img-fluid" src="{{asset('images/Add-icone.png')}}"></button>
                                {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'todoText', 'placeholder'=>'دسته بندی جدید']) !!}
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>

        </div>
    </div>


@endsection