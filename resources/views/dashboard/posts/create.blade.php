@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('css_resources')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <nav dir="rtl">
        @component('components.errors') @endcomponent
    </nav>

    <div class="row hi-createPostBox">
        <div class="col-8">
            {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'id'=>'createPostForm', 'files' => true]) !!}
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
                            CKEDITOR.replace('body', {
                                filebrowserUploadUrl : '{{ route('posts.imageUpload') }}',
                                filebrowserImageUploadUrl : '{{ route('posts.imageUpload') }}'
                            });
                        </script>
                        <br>

                        {!! Form::text('selectedCategories', null, ['style' => 'display: none;']) !!}
                        {!! Form::text('selectedTags', null, ['style' => 'display: none;']) !!}

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
            <div class="row">
                @component('components.CreatePostLeftSidebar')
                    @slot('title') دسته بندی ها @endslot
                    @slot('list')
                        <div id="postCategories">
                            @include('Includes.PostCategories')
                        </div>
                    @endslot
                    @slot('search_form')
                        {!! Form::open(['method'=>'GET', 'action'=>'CategoryController@index']) !!}
                            {!! Form::text('query', null, ['class' => 'form-control searchFormListGroup mr-2 pb-1 hi-fontSize-13', 'placeholder'=>'جست و جو کنید', 'id'=>'categorySearch']) !!}
                        {!! Form::close() !!}
                    @endslot
                    @slot('create_form')
                        {!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store', 'class'=>'form-inline TodoWidget l-ltr', 'id'=>'createCategoryForm']) !!}
                            <div class="input-group" id="addTodo">
                                <button type="submit" id="categorySubmit"><img class="img-fluid" src="{{asset('images/Add-icone.png')}}"></button>
                                {!! Form::text('category', null, ['class' => 'form-control', 'id'=>'todoText', 'placeholder'=>'دسته بندی جدید']) !!}
                            </div>
                        {!! Form::close() !!}
                    @endslot
                @endcomponent
            </div>

            <br>

            <div class="row">
                @component('components.CreatePostLeftSidebar')
                    @slot('title') برچسب ها @endslot
                    @slot('list')
                        <div id="postTags">
                            @include('Includes.PostTags')
                        </div>
                    @endslot
                    @slot('search_form')
                        {!! Form::open(['method'=>'GET', 'action'=>'tagController@index']) !!}
                            {!! Form::text('query', null, ['class' => 'form-control searchFormListGroup mr-2 pb-1 hi-fontSize-13', 'placeholder'=>'جست و جو کنید', 'id'=>'tagSearch']) !!}
                        {!! Form::close() !!}
                    @endslot
                    @slot('create_form')
                        {!! Form::open(['method'=>'POST', 'action'=>'tagController@store', 'class'=>'form-inline TodoWidget l-ltr', 'id'=>'createTagForm']) !!}
                            <div class="input-group" id="addTodo">
                                <button type="submit" id="tagSubmit"><img class="img-fluid" src="{{asset('images/Add-icone.png')}}"></button>
                                {!! Form::text('name', null, ['class' => 'form-control', 'id'=>'todoText', 'placeholder'=>'دسته بندی جدید']) !!}
                            </div>
                        {!! Form::close() !!}
                    @endslot
                @endcomponent
            </div>

        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/CreatePostIndex.js') }}"></script>
    <script src="{{ asset('Hi_Framework/javascript/other/dropzone.js') }}"></script>
@endsection
