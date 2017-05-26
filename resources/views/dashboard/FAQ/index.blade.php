@extends('layouts.main')

@section('content')
    <div class="row FAQBox_direction">
        <div class="col-6">
            <div class="row">
                <label>متن سوال را وارد کنید:</label>
                <textarea class="form-control" rows="6"></textarea>
            </div>
            <br>
            <div class="row">
                <label>متن جواب را وراد کنید:</label>
                <textarea class="form-control" rows="6"></textarea>
            </div>
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

@endsection