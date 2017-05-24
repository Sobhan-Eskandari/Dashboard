@extends('layouts.main')

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid">

                    {{--==========[ Row of buttons abpve table ]========= --}}
                    <div class="row">
                        <div class="col-1 push-11 ml-2 text-right">
                            <button class="hi-button-simple hi-shadow-0 yellow darken-3">زباله</button>
                        </div>
                    </div>

                    {{--==========[ Table Of Users ]========= --}}
                    <div class="row mt-3">
                        <div class="col-12 px-0">
                            <table class="messages_inbox_trashTable">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th class="pl-0">
                                        <div class="pure-checkbox mt-2">
                                            <input id="selectAllMsgInbox" class="selectAllCheckboxes" name="checkbox" type="checkbox" onclick="selectAllCmnt()">
                                            <label for="selectAllMsgInbox"></label>
                                        </div>
                                    </th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th width="50%">صندوق ورودی</th>
                                    <th>زمان</th>
                                    <th>وضعیت</th>
                                    <th></th>
                                </tr>

                                </thead>
                                <tbody>

                                @for ($i = 0; $i < 8; $i++)
                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessagesInboxTableRow')

                                        @slot('chk_name')
                                            {{ $i }}
                                        @endslot


                                    @slot('sender_name')
                                            حمید وتر
                                        @endslot

                                        @slot('sender_text')
                                                هواپیمای فضایی بدون سرنشین نیروی هوایی آمریکا به نام X-37B دیروز صبح در مرکز فضایی کِنِدی ناسا به زمین نشست،
                                        @endslot

                                        @slot('sender_time')
۲۲:۳۰
                                        @endslot

                                        @slot('sender_date')
۱۳۹۶/۵/۴
                                        @endslot

                                        @slot('trash')
                                             yes
                                        @endslot

                                    @endcomponent
                                </tr>
                                @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--============[ Pagination of Page ]===========--}}
                    <div class="row mt-4">
                        <div class="col-auto">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link nextBtn" href="#">بعدی</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۲</a></li>
                                    <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                    <li class="page-item"><a class="page-link prevBtn" href="#">قبلی</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection