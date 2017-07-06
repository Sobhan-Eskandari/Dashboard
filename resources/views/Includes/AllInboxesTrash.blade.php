{{--==========[ Row of buttons abpve table ]========= --}}<div class="row">    <div class="col-1 push-11 ml-2 text-right">        {!! Form::open(['method'=>'POST', 'action'=>'InboxController@multiDestroy', 'id'=>'deleteForm']) !!}        <button id="multiDestroy" type="button" class="hi-button-simple hi-shadow-0 yellow darken-3">حذف دائمی</button>        {!! Form::close() !!}    </div></div>{{--==========[ Table Of Users ]========= --}}<div class="row mt-3">    <div class="col-12 px-0">        <table class="messages_inbox_table">            <thead class="table_tableHeader white-text">            {{--==========[ Table Headers ]========= --}}            <tr>                <th class="pl-0">                    <div class="pure-checkbox mt-2">                        <input id="selectAllMsgInbox" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">                        <label for="selectAllMsgInbox"></label>                    </div>                </th>                <th class="text-right">علامت زدن همه</th>                <th width="50%">صندوق ورودی</th>                <th>زمان</th>                <th>پاسخ داده شده</th>                <th></th>            </tr>            </thead>            <tbody>            @foreach($inboxes as $inbox)                {{--==========[ Table Row ]========= --}}                <tr class={{ $inbox->seen === 0 ? 'active_row' : '' }}>                    @component('components.MessagesInboxTrashTableRow')                        @slot('id') {{ $inbox->id }} @endslot                        @slot('full_name') {{ $inbox->full_name }} @endslot                        @slot('message') {{ str_limit($inbox->message, 100) }} @endslot                        @slot('time') {{ $inbox->created_at->format('H:i') }} @endslot                        @slot('date') {{ $inbox->created_at->format('y/m/d') }} @endslot                        @if(is_null($inbox->answered_by))                            @slot('answered') @endslot                        @endif                    @endcomponent                </tr>            @endforeach            </tbody>        </table>    </div></div>{{--============[ Pagination of Page ]===========--}}<div class="row mt-4">    <div class="col-auto">        <nav aria-label="Page navigation example">            {{ $inboxes->links() }}        </nav>    </div></div><script src="{{ asset('js/dashboard/inboxTrashAll.js') }}"></script>