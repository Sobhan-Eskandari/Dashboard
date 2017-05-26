@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection

@section('content')

    <div class="row hi-createPostBox">

        <div class="col-8">
            <div class="row">
                <div class="form-group makeCreatePostTitleBox">
                    <label for="makeCreatePostTitle" class="createPostLabel">ایجاد پست جدید</label>
                    <input type="text" class="form-control makeCreatePostTitle" placeholder="عنوان پست را وارد کنید.">
                </div>
            </div>
            <br>
            <div class="row">
                {{--============[ Right box without image ]===========--}}
                <div class="col-10">
                    <form>
                    <div class="row pr-0">
                        <div class="col-6 pr-0 pt-3">
                            <label class="pull-right createPostLabel">متن پست را وارد کنید:</label>
                        </div>
                        <div class="col-6 pr-0">
                            <button class="btn btn-primary pull-left mb-2 createPostAddFileButton">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                                افزودن فایل
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <textarea name="postText" class="form-control writeCreatePostBox" rows="10"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <button class="btn btn-primary createPostPublicationButton px-4" type="submit">انتشار</button>
                    </div>
                    </form>
                </div>
                {{--============[ image box ]===========--}}
                <div class="col-2 pr-0">
                    <br><br>
                    <img src="{{asset('images/nobody_m.original.jpg')}}" alt="در حال بارگذاری عکس" class="createPostImage mr-2">
                </div>
            </div>
        </div>

        <div class="col-4 mt-1">
            <br>
            <div class="row">
                <ul class="list-group hi-infoPostListGroup">
                    <li class="list-group-item justify-content-between pl-4 pr-3 flip" id="hi-infoPostListGroupFlip">
                        اطلاعات پست
                        <i class="fa fa-caret-down pull-left" aria-hidden="true"></i>
                    </li>
                    <div id="hi-infoPostListGroupPanel" class="panel">
                        <li class="list-group-item justify-content-between list-group-item_border">
                            <button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نویس</button>
                            <button class="btn btn-secondary btn-secondary-postInfo btn-sm active p-2">پیش نمایش
                            </button>
                        </li>
                        <li class="list-group-item"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; 25 بازدید</li>
                        <li class="list-group-item"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;10 نظر</li>
                        <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;1396/5/25
                        </li>
                        <li class="list-group-item">ایجاد شده توسط:حمید وتر</li>
                        <li class="list-group-item">تعداد ویرایش&nbsp;<span
                                    class="badge badge-pill badge-default">1</span></li>
                        <li class="list-group-item">آخرین ویرایش : 1396/6/25 - حمید وتر</li>
                    </div>
                </ul>
            </div>
            <br>
            <div class="row">
                @component('components.categoryListGroup')
                    @slot('createCategoryTagsID')
                        categoriesList
                    @endslot

                    @slot('categoryName')
                        دسته بندی ها
                    @endslot
                @endcomponent
            </div>
            <br>
            <div class="row">
                @component('components.categoryListGroup')
                    @slot('createCategoryTagsID')
                        tagsList
                    @endslot

                    @slot('categoryName')
                        برچسب ها
                    @endslot
                @endcomponent
            </div>

        </div>
    </div>

    <script>
        CKEDITOR.replace('postText');
    </script>

@endsection