{{--==========[ Row of buttons abpve table ]========= --}}<div class="row">    <div class="col-auto pl-0">        <a class="hi-button-btn1 orange darken-2 hi-shadow-1 hi-size-4" href="{{ route('posts.trash') }}">            <i class="fa fa-trash white-text hi-fontSize-20" aria-hidden="true"></i>        </a>    </div>    {{--<div class="col-2">--}}        {{--<div class="Topbar_dropdown posts_dropdown dropdown">--}}            {{--<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}                {{--همه ی دسته بندی ها--}}            {{--</button>--}}            {{--<div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">--}}                {{--<a class="dropdown-item text-right py-1" href="#"><i class="fa fa-user ml-2" aria-hidden="true"></i> پروفایل من</a>--}}                {{--<a class="dropdown-item text-right py-1" href="#"><i class="fa fa-file-text-o ml-2" aria-hidden="true"></i> مدیران</a>--}}                {{--<a class="dropdown-item text-right py-1" href="#"><i class="fa fa-download ml-2" aria-hidden="true"></i> نسخه پشتیبانی</a>--}}                {{--<div class="dropdown-divider"></div>--}}                {{--<a class="dropdown-item text-right py-1" href="#"><i class="fa fa-power-off ml-2" aria-hidden="true"></i>خروج</a>--}}            {{--</div>--}}        {{--</div>--}}    {{--</div>--}}    {{--==========[ Calender Dates ]========= --}}    <div class="col-2 btn-group-justified l-flex">        <input name="from" type="text" class="backup_dateSelector backupSelect mr-3 px-2 l-rtl" />        <h6 class="card-title pt-2 backupExportCard_title">: از&nbsp;</h6>    </div>    <div class="col-2 btn-group-justified l-flex">        <input name="till" type="text" class="backup_dateSelector backupSelect px-2 l-rtl" />        <h6 class="card-title pt-2 backupExportCard_title">&nbsp;&nbsp;: تا&nbsp;</h6>    </div>    <div class="btn-group push-5" role="group" aria-label="Basic example">        {!! Form::open(['method'=>'POST', 'action'=>'PostController@multiDestroy', 'id'=>'deleteForm']) !!}            <button id="multiDestroy" type="button" class="hi-button-simple hi-shadow-0 ml-5 red darken-3 text-right">حذف</button>        {!! Form::close() !!}        <a class="white-text ml-3" href="{{ route('posts.create') }}">            <button class="hi-button-simple hi-shadow-0 green darken-3">ایجاد</button>        </a>    </div></div>{{--==========[ Table Of Users ]========= --}}<div class="row mt-3">    <div class="col-12 px-0">        <table class="posts_table">            <thead class="table_tableHeader white-text">            {{--==========[ Table Headers ]========= --}}            <tr>                <th class="pl-0">                    <div class="pure-checkbox mt-2">                        <input id="selectAllPost" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">                        <label for="selectAllPost"></label>                    </div>                </th>                <th class="text-right">علامت زدن همه</th>                <th>نویسنده</th>                <th>دسته بندی ها</th>                <th>برچسب ها</th>                <th>تاریخ</th>                <th>                </th>            </tr>            </thead>            <tbody>            @foreach($posts as $post)                {{--==========[ Table Row ]========= --}}                <tr>                    @component('components.AllPostTableRow')                        @slot('id') {{ $post->id }} @endslot                        @slot('title') {{ $post->title }} @endslot                        @slot('last_update')                            ویرایش شده توسط {{ $post->updater->full_name }} در {{ $post->updated_at->format('y/m/d') }}                        @endslot                        @slot('creator') {{ $post->creator->full_name }} @endslot                        @slot('categories') {{ isset($post->categories[0]->name) ? $post->categories[0]->name . ' ' . 'و...' : 'ندارد' }} @endslot                        @slot('tags') {{ isset($post->tags[0]->name) ? $post->tags[0]->name . ' ' . 'و...' : 'ندارد' }} @endslot                        @slot('created_at') {{ $post->created_at->format('y/m/d') }} @endslot                        @slot('comments') {{ count($post->comments) }} @endslot                        @slot('views') {{ $post->views }} @endslot                    @endcomponent                </tr>            @endforeach            </tbody>        </table>    </div></div>{{--============[ Pagination of Page ]===========--}}<div class="row mt-4">    <div class="col-auto">        <nav aria-label="Page navigation example">            {{ $posts->links() }}        </nav>    </div></div><script src="{{ asset('js/dashboard/postAll.js') }}"></script>