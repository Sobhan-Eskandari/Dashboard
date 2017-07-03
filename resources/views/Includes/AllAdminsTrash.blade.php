{{--==========[ Row of buttons abpve table ]=========--}}<div class="row">    <div class="col-1 push-11 ml-2 text-right">        {!! Form::open(['method'=>'POST', 'action'=>'AdminController@forceMultiDestroy', 'id'=>'deleteForm']) !!}            <button id="multiDestroy" type="button" class="hi-button-simple hi-shadow-0 yellow darken-3">حذف دائمی</button>        {!! Form::close() !!}    </div></div>{{--==========[ Table Of Users ]=========--}}<div class="row mt-3">    <div class="col-12 px-0">        <table class="admins_trashTable">            <thead class="table_tableHeader white-text">            {{--==========[ Table Headers ]=========--}}            <tr>                <th><input type="checkbox"></th>                <th class="text-right">علامت زدن همه</th>                <th>نام</th>                <th>پست الکترونیکی</th>                <th>تلفن همراه</th>                <th>نقش</th>                <th></th>            </tr>            </thead>            <tbody>            @foreach($admins as $admin)                {{--==========[ Table Row ]=========--}}                <tr>                    @component('components.AdminTrashTableRow')                        @slot('id') {{ $admin->id }} @endslot                        @slot('user_name') {{ $admin->user_name }} @endslot                        @slot('full_name') {{ $admin->full_name }} @endslot                        @slot('email') {{ $admin->email }} @endslot                        @slot('mobile') {{ $admin->mobile }} @endslot                        @slot('role') {{ $admin->role->role }} @endslot                    @endcomponent                </tr>            @endforeach            </tbody>        </table>    </div></div>{{--============[ Pagination of Page ]===========--}}<div class="row mt-4">    <div class="col-auto">        <nav aria-label="Page navigation example">            {{ $admins->links() }}        </nav>    </div></div><script src="{{ asset('js/dashboard/adminTrashAll.js') }}"></script>