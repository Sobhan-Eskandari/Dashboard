@extends('layouts.main')

@section('content')

    <div class="row backupBox_direction">
        <div class="col-4">
                @component('components.ExportCard')
                    @slot('font_awesome')
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        نسخه پشتیبانی پست ها
                    @endslot
                    @slot('style')
                        background-color:#2b4748;
                    @endslot
                @endcomponent
        </div>
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    نسخه پشتیبانی پیام ها
                @endslot
                @slot('style')
                    background-color:#3e4d9e;
                @endslot
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    نسخه پشتیبانی کاربران
                @endslot
                @slot('style')
                    background-color:#3baeda;
                @endslot
            @endcomponent
        </div>
    </div>
    <br><br>
    <div class="row backupBox_direction">
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-commenting-o" aria-hidden="true"></i>
                   نسخه پشتیبانی نظرات
                @endslot
                @slot('style')
                    background-color:#b32e2e;
                @endslot
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    نسخه پشتیبانی ادمین ها
                @endslot
                @slot('style')
                    background-color:#4d5667;
                @endslot
            @endcomponent
        </div>
        <div class="col-4"></div>
    </div>


@endsection

@section('js_resources')
    <script src="{{ asset('Hi_Framework/javascript/Time And Date Picker/Other Libraries/PersianDatePicker/persian-date.js') }}"></script>
    <script src="{{ asset('Hi_Framework/javascript/Time And Date Picker/Other Libraries/PersianDatePicker/persian-datepicker-0.4.5.js') }}"></script>
@endsection