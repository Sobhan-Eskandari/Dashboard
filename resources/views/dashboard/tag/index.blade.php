@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <div class="hi-whiteCategoryDashboardBox">
        <div class="row p-5">
            <div class="col-5 offset-1" id="boxOfTags">
                @if($tags)
                    @foreach($tags as $tag)
                        <div class="tag tag_darkMode">
                            <p class="tag__text">
                                {{$tag->name}}
                            </p>
                            {!! Form::open(['method'=>'DELETE','action'=>['tagController@destroy',$tag->id]]) !!}
                            <button class="tag__close deleteTag fa fa-times" aria-hidden="true" id="deleteTag" data-id="{{$tag->id}}"></button>
                            {!! Form::close() !!}
                        </div>

                    @endforeach
                @endif
            </div>

            <div class="col-4 offset-1 categoryRightDirection">
                <div class="row">
                    {!! Form::open(['method'=>'POST','action'=>'tagController@store','id'=>'chipsTag']) !!}
                    <div class="form-group">
                        <label for="hi-whiteCategoryDashboardBox_input"><h5> تگ ها:</h5></label>
                        <input id="chipsText" type="text" name="name" class="form-control hi-whiteCategoryDashboardBox_input">
                    </div>
                </div>
                <div class="row pr-1 pl-0">
                    <button  id="addChips" class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2">تایید</button>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
    {{--<script src="{{ asset('js/Alert/modernizr.custom.js') }}"></script>--}}
    {{--<script src="{{ asset('js/Alert/bounce.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/Alert/classie.js') }}"></script>--}}
    {{--<script src="{{ asset('js/Alert/notificationFx.js') }}"></script>--}}
@endsection


