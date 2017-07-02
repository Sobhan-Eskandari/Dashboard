@extends('layouts.main')


@section('content')

    @component('TextEditor')
    @endcomponent
    {{--==========[ Submit Button ]========= --}}
    <div class="row">
        <div class="col-12 text-right mt-3 pr-0">
            <button class="btn btn-primary hi-shadow-1">
                تایید
            </button>
        </div>
    </div>

@endsection