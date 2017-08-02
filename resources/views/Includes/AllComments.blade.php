{{--==========[ Row of buttons abpve table ]========= --}}
<div class="row">
    <div class="col-1 pl-0">
        <a href="{{route('comments.trash')}}">
        <button class="hi-button-btn1 orange darken-2 hi-shadow-1 hi-size-4">
            <i class="fa fa-trash white-text hi-fontSize-20" aria-hidden="true"></i>
        </button>
        </a>
    </div>

    <div class="col-2">
        <div class="Topbar_dropdown posts_dropdown dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                همه ی دسته بندی ها
            </button>
            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>
                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>
                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>
            </div>
        </div>
    </div>

    <div class="col-auto offset-6 text-right mr-2">
        {{Form::open(['method'=>'POST','action'=>'CommentController@multiDestroy'])}}
        <button class="hi-button-simple hi-shadow-0 red darken-3 text-right" id="multiDestroy">حذف</button>
        {{Form::close()}}
    </div>

    {{--<div class="col-auto text-right">--}}
        {{--<button class="hi-button-simple hi-shadow-0 blue darken-1">ویرایش</button>--}}
    {{--</div>--}}

    {{--<div class="col-auto ml-2 text-right">--}}
        {{--<button class="hi-button-simple hi-shadow-0 green darken-3">ایجاد</button>--}}
    {{--</div>--}}
</div>
{{--==========[ Table Of Users ]========= --}}
<div class="row mt-3">
    <div class="col-12 px-0">
        <table class="comments_table">
            <thead class="table_tableHeader white-text">

            {{--==========[ Table Headers ]========= --}}
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

                        @slot('trash')@endslot
                        @slot('settings')
                                {{Form::open(['method'=>'POST','action'=>['CommentController@approve',$comment->id]])}}
                                <button class="dropdown-item text-right hi-shadow-0 py-0" href="#"><i class="fa fa-check ml-2" aria-hidden="true"></i>تایید</button>
                                {{Form::close()}}
                                <a class="dropdown-item text-right py-0" href="{{route('comments.edit',$comment->id)}}"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
                                <a class="dropdown-item text-right py-0" href="{{route('comments.show',$comment->id)}}"><i class="fa fa-reply ml-2" aria-hidden="true"></i> پاسخ</a>
                                <div class="dropdown-divider my-1"></div>
                                {{Form::open(['method'=>'DELETE','action'=>['CommentController@destroy',$comment->id]])}}
                                <button class="dropdown-item text-right hi-shadow-0 py-0 mt-1" id="destroyComment" data-id="{{$comment->id}}"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</button>
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
        $("#destroyComment").click(function (e) {
            e.preventDefault();
            var query = $('#searchCmt').val();
//            console.log(query);
            var commentId = $("#destroyComment").attr('data-id');
            var CSRF_TOKEN =$("input[name*='_token']").val();
            $.ajax({
                type: 'DELETE',
                url: '/comments/'+commentId,
                data: {_token: CSRF_TOKEN,query:query}
            }).done(function (data) {
                $("#categories").html(data);
                if(query === null) {
                    window.history.pushState("", "", "http://dash.dev/comments");
                }else {
                    window.history.pushState(data, "Title", " /comments?query=" + collect['query']);
                }
            }).fail(function () {
            });
        });
var checkboxes;
        $('input[type=checkbox]').change(function () {
            var val = [];
            $(':checkbox:checked').each(function(i){
                val[i] = $(this).val();
            });
            checkboxes = val;
        });

        $('#multiDestroy').click(function (e) {
            e.preventDefault();
            var query = $('#searchCmt').val();
            var CSRF_TOKEN =$("input[name*='_token']").val();
            $.ajax({
                type: 'POST',
                url: 'comments/multiDestroy',
                data: {_token: CSRF_TOKEN,query:query,checkboxes:checkboxes}
            }).done(function (data) {
                $("#categories").html(data);
                if(query === null) {
                    window.history.pushState("", "", "http://dash.dev/comments");
                }else {
                    window.history.pushState(data, "Title", " /comments?query=" + collect['query']);
                }
            }).fail(function () {
            });
//            console.log(checkboxes);
        });
    </script>