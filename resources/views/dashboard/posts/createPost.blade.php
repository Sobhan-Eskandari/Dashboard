@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <div class="row createPostBox">
        <div class="col-8" style="border: 1px solid red">
            <div class="row">
                <div class="form-group">
                    <label for="exampleInputPassword1">ایجاد پست جدید</label>
                    <input type="password" class="form-control" placeholder="عنوان پست را وارد کنید.">
                </div>
            </div>
        </div>
        <div class="col-4" style="border: 1px solid red">
            <div class="row">
                <ul class="list-group">
                    <li class="list-group-item justify-content-between" id="flip">اطلاعات پست
                        <i class="fa fa-caret-down pull-left" aria-hidden="true"></i>
                    </li>
                    <div id="panel">
                        <li class="list-group-item">25 بازدید</li>
                        <li class="list-group-item">1396/5/25</li>
                        <li class="list-group-item">ایجاد شده توسط:حمید وتر</li>
                        <li class="list-group-item">آخرین ویرایش : 1396/6/25</li>
                    </div>
                </ul>
            </div>
        </div>
    </div>

@endsection