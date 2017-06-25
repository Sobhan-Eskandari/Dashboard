@extends('layouts.main')

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection

@section('content')

    <nav dir="rtl">
        @component('components.errors') @endcomponent
        @component('components.flash') @endcomponent
    </nav>

    <div class="row FAQBox_direction">
        <div class="col-6" id="create-div">
            {!! Form::open(['method'=>'POST', 'action'=>'FaqController@store', 'id'=>'createForm']) !!}
                <div class="row">
                    <label>متن سوال را وارد کنید:</label>
                    {!! Form::text('question', null, ['class' => 'form-control FAQInput']) !!}
                </div>
                <br>
                <div class="row">
                    <label>متن جواب را وراد کنید:</label>
                    {!! Form::textarea('answer', null, ['class'=>'form-control', 'rows'=>'6', 'id'=>'answer']) !!}
                    <script>
                        CKEDITOR.replace('answer');
                    </script>
                </div>
                <button class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2 pull-right mt-4 py-2 px-1 hi-fontSize-16" id="create-submit"
                        type="submit">تایید</button>
            {!! Form::close() !!}
        </div>

        <div class="col-6" id="edit-div" style="display: none">
            {!! Form::open(['method'=>'PUT', 'id'=>'editForm']) !!}
            <div class="row">
                <label>متن سوال را وارد کنید:</label>
                {!! Form::text('question', null, ['class' => 'form-control FAQInput']) !!}
            </div>
            <br>
            <div class="row">
                <label>متن جواب را وراد کنید:</label>
                {!! Form::textarea('answer', null, ['class'=>'form-control', 'rows'=>'6', 'id'=>'answerEdit']) !!}
                <script>
                    CKEDITOR.replace('answerEdit');
                </script>
            </div>
            <button class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2 pull-right mt-4 py-2 px-1 hi-fontSize-16" id="edit-submit"
                    type="submit">ویرایش</button>
            {!! Form::close() !!}
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header FAQ_card-header">
                   <span class="pull-right pt-1">
                       <label class='FAQ_card-block_tick_square-checkbox'>
                                <input type='checkbox' class="pull-right">
                           &nbsp;
                                <span> علامت زدن همه</span>
                            </label>

                   </span>
                    <span class="pull-left">
                    <button type="button" class="btn btn-danger FAQ_card-header_deleteButton py-1">حذف</button>
                </span>
                </div>
                <div class="card-block" id="loadFaqs">
                    @include('includes.AllFaqs')
                </div>
            </div>
        </div>
    </div>

@section('javascript')
    <script src="{{ asset('js/dashboard/faqIndex.js') }}"></script>
@endsection

@endsection