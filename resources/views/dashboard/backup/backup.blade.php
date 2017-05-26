@extends('layouts.main')

@section('content')

    <div class="row backupBox_direction">
        <div class="col-4">
                @component('components.ExportCard')
                    @slot('font_awesome')
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    @endslot
                    @slot('style')
                        background-color:#2b4748;
                    @endslot
                @endcomponent
        </div>
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-envelope" aria-hidden="true"></i>
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
                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                @endslot
                @slot('style')
                    background-color:#b32e2e;
                @endslot
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.ExportCard')
                @slot('font_awesome')
                    <i class="fa fa-user" aria-hidden="true"></i>
                @endslot
                @slot('style')
                    background-color:#4d5667;
                @endslot
            @endcomponent
        </div>
        <div class="col-4"></div>
    </div>


@endsection