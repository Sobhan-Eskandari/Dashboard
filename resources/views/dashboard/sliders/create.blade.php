@extends('layouts.main')

@section('css_resources')
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
@endsection
@section('content')


    <div class="row direction_create_slider">
        <div class="col-8 pull-right">
            @component('components.TextEditor')
                @slot('textEditorLabel')
                    متن اسلاید را وارد کنید:
                @endslot
            @endcomponent
        </div>
    </div>
    {{--==========[ Submit Button ]========= --}}
    <div class="row">
        <div class="col-12 text-right mt-4 pr-0">
            <button class="btn btn-primary hi-shadow-1 px-4 light-blue darken-2">
                انتشار
            </button>
        </div>
    </div>


@endsection