{{--==========[ Row of buttons abpve table ]=========--}}
<div class="row">
<div class="col-1 push-11 ml-2 text-right">
    {!! Form::open(['method'=>'POST','action'=>'CommentController@multiForceDelete'])!!}
<button class="hi-button-simple hi-shadow-0 yellow darken-3" id="forceMultiDestroy">زباله</button>
    {!! Form::close() !!}
</div>
</div>

{{--==========[ Table Of Users ]=========--}}
<div class="row mt-3">
<div class="col-12 px-0">
<table class="comments_trashTable">
<thead class="table_tableHeader white-text">

{{--==========[ Table Headers ]=========--}}
<tr>
<th class="pl-0">
<div class="pure-checkbox mt-2">
<input id="selectAllComments" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
<label for="selectAllComments"></label>
</div>
</th>
<th class="text-right">علامت زدن همه</th>
<th width="50%">متن</th>
<th>محتوا</th>
<th>زمان</th>
<th>وضعیت</th>
<th></th>
</tr>

</thead>
<tbody>


{{--==========[ Table Row ]=========--}}

@foreach($comments as $comment)
    {{--==========[ Table Row ]========= --}}
    <tr>
        @component('components.CommentsTableRow')

            @slot('chk_name')
                {{ $comment->id }}
            @endslot

            @slot('comment_author')
                {{$comment->full_name}}
            @endslot

            @slot('comment_text')
                {{$comment->message}}
            @endslot

            @slot('comment_content')
                {{$comment->subject}}
            @endslot

            @slot('comment_time')
                {{ $comment->created_at->format('H:i') }}
            @endslot

            @slot('comment_date')
                {{ $comment->created_at->format('y/m/d') }}
            @endslot
                @slot('status')
                    @if($comment->status==='not-checked')
                        <i class="fa fa-times fa-2x red-text" aria-hidden="true"></i>
                    @elseif($comment->status==='checked')
                        <i class="fa fa-check fa-2x green-text" aria-hidden="true"></i>
                    @endif
                @endslot
@slot('trash')
yes
@endslot
    @slot('settings')
        {{Form::open(['method'=>'POST','action'=>['CommentController@restore',$comment->id]])}}
        <button class="dropdown-item text-right py-0" id="restoreComment" data-id="{{$comment->id}}"><i class="fa fa-check ml-2" aria-hidden="true"></i>بازگردانی</button>
        {{Form::close()}}
        {{Form::open(['method'=>'DELETE','action'=>['CommentController@forceDelete',$comment->id]])}}
        <button class="dropdown-item text-right py-0 mt-1" id="forceDestroyComment" data-id="{{$comment->id}}"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</button>
        {{Form::close()}}
        @endslot

@endcomponent
</tr>
@endforeach

</tbody>
</table>
</div>
</div>

{{--============[ Pagination of Page ]===========--}}
{{$comments->links()}}

<script>
    var checkboxes;
    $('input[type=checkbox]').change(function () {
        var val = [];
        $(':checkbox:checked').each(function(i){
            val[i] = $(this).val();
        });
        checkboxes = val;
    });
//    console.log(checkboxes);

    $("#forceDestroyComment").click(function (e) {
        e.preventDefault();
        var query = $('#searchCmt').val();
//            console.log(query);
        var commentId = $("#forceDestroyComment").attr('data-id');
//        console.log(commentId);
        var CSRF_TOKEN =$("input[name*='_token']").val();
        $.ajax({
            type: 'DELETE',
            url: '/comments-forceDelete/'+commentId,
            data: {_token: CSRF_TOKEN,query:query}
        }).done(function (data) {
            $("#trash").html(data);
            console.log('sddfsdf');
            if(query === "") {
                window.history.pushState("", "", "http://dash.dev/comments-trash");
            }else {
                window.history.pushState(data, "Title", " /comments-trash?query=" + query);
            }
        }).fail(function () {
        });
    });
    $("#restoreComment").click(function (e) {
        e.preventDefault();
        var query = $('#searchCmt').val();
//            console.log(query);
        var commentId = $("#restoreComment").attr('data-id');
//        console.log(commentId);
        var CSRF_TOKEN =$("input[name*='_token']").val();
        $.ajax({
            type: 'POST',
            url: '/comments-restore/'+commentId,
            data: {_token: CSRF_TOKEN,query:query}
        }).done(function (data) {
            $("#trash").html(data);
            if(query === "") {
                window.history.pushState("", "", "http://dash.dev/comments-trash");
            }else {
                window.history.pushState(data, "Title", " /comments-trash?query=" + query);
            }
        }).fail(function () {
        });
    });

    $('#forceMultiDestroy').click(function (e) {
        e.preventDefault();
        var query = $('#searchCmt').val();
        var CSRF_TOKEN =$("input[name*='_token']").val();
        $.ajax({
            type: 'POST',
            url: 'comments-multiForceDelete',
            data: {_token: CSRF_TOKEN,query:query,checkboxes:checkboxes}
        }).done(function (data) {
            $("#trash").html(data);
//            console.log(query);
            if(query === "") {
                window.history.pushState("", "", "http://dash.dev/comments-trash");
            }else {
                window.history.pushState(data, "Title", " /comments-trash?query=" + query);
            }
        }).fail(function () {
        });
//            console.log(checkboxes);
    });
    </script>