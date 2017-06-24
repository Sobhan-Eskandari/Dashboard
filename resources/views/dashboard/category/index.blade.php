@extends('layouts.main')

@section('search')
    {{--<div class="hi-search-1">--}}
        {{--<input placeholder="جست و جو کنید..." class="hi-search_field" type="text" id="search">--}}
        {{--<button class="hi-button-btn1 pull-left"><i class="fa fa-search white-text hi-fontSize-19" aria-hidden="true"></i></button>--}}
    {{--</div>--}}
    <div class="hi-search-1">
        {!! Form::open(['method'=>'GET', 'action'=>'CategoryController@index']) !!}
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
    <div class="hi-whiteCategoryDashboardBox">

        {{--<nav dir="rtl">--}}
            {{--@component('components.errors') @endcomponent--}}
            {{--@component('components.flash') @endcomponent--}}
        {{--</nav>--}}

        <div class="row p-5">

            <div class="col-5 offset-1" id="loadCategories">
                @include('Includes.AllCategories')
            </div>

            <div class="col-4 offset-1 categoryRightDirection" id="create-div">
                {!! Form::open(['method'=>'POST', 'action'=>'CategoryController@store', 'id'=>'createForm']) !!}
                    <div class="row">
                        <div class="form-group">
                            <label for="hi-whiteCategoryDashboardBox_input"><h5>دسته بندی:</h5></label>
                            {!! Form::text('category', null, ['class' => 'form-control hi-whiteCategoryDashboardBox_input']) !!}
                        </div>
                    </div>
                    <div class="row pr-1 pl-0">
                        {!! Form::submit('ساخت', ['class'=>'btn hi-whiteCategoryDashboardBox_button light-blue darken-2', 'id' => 'submit']) !!}
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="col-4 offset-1 categoryRightDirection" id="edit-div" style="display: none">
                {!! Form::open(['method'=>'PUT', 'id'=>'editForm']) !!}
                <div class="row">
                    <div class="form-group">
                        <label for="hi-whiteCategoryDashboardBox_input"><h5>دسته بندی:</h5></label>
                        {!! Form::text('category', null, ['class' => 'form-control hi-whiteCategoryDashboardBox_input']) !!}
                    </div>
                </div>
                <div class="row pr-1 pl-0">
                    {!! Form::submit('ویرایش', ['class'=>'btn hi-whiteCategoryDashboardBox_button light-blue darken-2', 'id' => 'edit-submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('javascript')
    <script>

        /***
         *      create category js start
         */

        $('#submit').click(function (event) {
            event.preventDefault();
            var dataArray = $(this).parents('#createForm').serializeArray();
            $.ajax({
                type: "POST",
                url: "{{ route('categories.store') }}",
                data: dataArray
            }).success(function (data) {
                $("#createForm").find("input[name=category]").val('');
                $('#loadCategories').html(data);
                ShowNotification('دسته بندی ساخته شد');
            }).fail(function () {
                ShowNotification('وارد کردن دسته بندی الزامی است');
            });

            window.history.pushState("", "", "http://dashboard.dev/categories");
        });

        /***
         *      create category js end
         */

        /***
         *      edit category js start
         */

        $('#edit-submit').click(function (event) {
            event.preventDefault();
            var dataArray = $(this).parents('#editForm').serializeArray();
            var editUrl = $(this).parents('#editForm').attr('action');
            $.ajax({
                type: "PUT",
                url: editUrl,
                data: dataArray
            }).success(function (data) {
                $("#createForm").find("input[name=category]").val('');
                $('#loadCategories').html(data);
                $('#create-div').fadeIn();
                $('#edit-div').fadeOut();
                ShowNotification('دسته بندی ویرایش شد');
            }).fail(function () {
                ShowNotification('وارد کردن دسته بندی الزامی می باشد');
            });

            window.history.pushState("", "", "http://dashboard.dev/categories");
        });

        /***
         *      edit category js end
         */

        /***
         *      ajax pagination start
         */
        var loadCategories = $('#loadCategories');

        loadCategories.on('click', '.pagination a', function(event) {
            event.preventDefault();

            loadCategories.find('a').css('color', '#dfecf6');
            loadCategories.append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" src="/images/loading.gif" />');

            var url = $(this).attr('href');
            console.log(url);
            getCategories(url);
            window.history.pushState("", "", url);
        });

        function getCategories(url) {
            $.ajax({
                url : url
            }).done(function (data) {
                loadCategories.html(data);
            }).fail(function () {
                ShowNotification('مشکلی در بارگذاری بوجود آمد');
            });
        }

        /***
         *      ajax pagination end
         */

        function ShowNotification(notifText) {
            var notification = new NotificationFx({
                wrapper : document.body,
                message : notifText,
                layout : 'growl',
                effect : 'jelly',
                type : 'error',
                ttl : 6000,
                onClose : function() { return false; },
                onOpen : function() { return false; }
            });
            notification.show();
        }

        var SearchUrl = "{{ route('categories.index') }}";
        var categorySearch = $("#search");
        var collect = {};

        categorySearch.keyup(function (event) {
            if(categorySearch.val().length >=0  || event.keyCode === 8){

                /**
                 *      loading code goes here
                 */

                collect["query"] = categorySearch.val();
                $.ajax({
                    url : SearchUrl,
                    data: collect
                }).done(function (data) {
                    $('#loadCategories').html(data);
//                    ShowNotification('نتیجه های زیر یافت شدند');
                }).fail(function () {
//                    ShowNotification('نتیجه ای یافت نشد');
                });
                window.history.pushState("", "", SearchUrl + '?query=' + categorySearch.val());
            }
        });

    </script>
@endsection


