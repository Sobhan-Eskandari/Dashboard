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