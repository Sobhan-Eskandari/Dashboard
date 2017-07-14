
{{--==========[ Row of buttons abpve table ]========= --}}
<div class="row">
    <div class="col-1 push-11 ml-2 text-right">
        <button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>
    </div>
</div>

{{--==========[ Table Of Users ]========= --}}
<div class="row mt-3">
    <div class="col-12 px-0">
        <table class="users_trashTable">
            <thead class="table_tableHeader white-text">

            {{--==========[ Table Headers ]========= --}}
            <tr>
                <th class="pl-0">
                    <div class="pure-checkbox mt-2">
                        <input id="selectAllUsers" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
                        <label for="selectAllUsers"></label>
                    </div>
                </th>
                <th class="text-right">علامت زدن همه</th>
                <th>نام</th>
                <th>پست الکترونیکی</th>
                <th>تلفن همراه</th>
                <th>وضعیت</th>
                <th>
                </th>
            </tr>

            </thead>
            <tbody>
        @if($users)
            @foreach($users as $user)
                {{--==========[ Table Row ]========= --}}
                <tr>
                    @component('components.UsersTableRow')

                        @slot('chk_name')
                            {{ $user->id }}
                        @endslot

                        @slot('user_username')
                            {{$user->name}}
                        @endslot

                        @slot('user_fullname')
                                {{$user->getFullNameAttribute()}}
                        @endslot

                        @slot('user_email')
                            {{$user->email}}
                        @endslot

                        @slot('user_number')
                                {{is_null($user->mobile) ? 'شماره همراه وارد نشده':$user->mobile}}
                        @endslot

                        @slot('trash')
                            yes
                        @endslot
                        @slot('settings')
                            @endslot

                    @endcomponent
                </tr>
            @endforeach
        @endif
            </tbody>
        </table>
    </div>
</div>

{{--============[ Pagination of Page ]===========--}}
{{$users->links()}}
{{--<div class="row mt-4">--}}
    {{--<div class="col-auto">--}}
        {{--<nav aria-label="Page navigation example">--}}
            {{--<ul class="pagination">--}}
                {{--<li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>--}}
                {{--<li class="page-item"><a class="page-link" href="#">۱</a></li>--}}
                {{--<li class="page-item"><a class="page-link" href="#">۲</a></li>--}}
                {{--<li class="page-item"><a class="page-link" href="#">۳</a></li>--}}
                {{--<li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>--}}
            {{--</ul>--}}
        {{--</nav>--}}
    {{--</div>--}}
{{--</div>--}}
