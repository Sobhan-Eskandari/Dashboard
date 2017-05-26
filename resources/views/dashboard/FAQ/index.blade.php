@extends('layouts.main')

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection

@section('content')
    <div class="row FAQBox_direction">
        <div class="col-6">
            <div class="row">
                <label>متن سوال را وارد کنید:</label>
                <input type="text" class="form-control FAQInput">
            </div>
            <br>
            <div class="row">
                <label>متن جواب را وراد کنید:</label>
                <textarea name="postText" class="form-control" rows="6"></textarea>
            </div>
            <button class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2 pull-right mt-4 py-2 px-1 hi-fontSize-16"
                    type="submit">تایید</button>
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
                <div class="card-block">
                    @component('components.FAQ')
                    @endcomponent
                    <hr  class="FAQ_hr">
                        @component('components.FAQ')
                        @endcomponent
                        <hr  class="FAQ_hr">
                        @component('components.FAQ')
                        @endcomponent
                        <hr  class="FAQ_hr">
                        @component('components.FAQ')
                        @endcomponent
                </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace('postText');
    </script>
@endsection