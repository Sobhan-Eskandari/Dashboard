@foreach($categories as $category)    <li class="list-group-item justify-content-between ">        <label class='hi-categoryListGroup_li_square-checkbox'>            <input type='checkbox' class="pull-right" id="{{ $category->id }}">            &nbsp;            <span>{{ $category->name }}</span>        </label>        {!! Form::open(['method'=>'DELETE', 'action'=>['CategoryController@destroy', $category->id], 'class'=>'categorySingleDestroy']) !!}            <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>        {!! Form::close() !!}    </li>@endforeach<script src="{{ asset('js/dashboard/CreatePostInclude.js') }}"></script>