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

                    </div>

                    {{--==========[ Table Of Users ]========= --}}
                    <div class="row mt-3">
                        <div class="col-12 px-0">
                            <table class="table">
                                <thead class="table_tableHeader white-text">

                                {{--==========[ Table Headers ]========= --}}
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th class="text-right">علامت زدن همه</th>
                                    <th width="50%">صندوق خروجی</th>
                                    <th>زمان</th>
                                    <th>گیرنده</th>
                                    <th></th>
                                </tr>

                                </thead>
                                <tbody>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                                کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                                ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                                مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                                yes
                                        @endslot

                                    @endcomponent
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                            کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                            ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                            مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                            yes
                                        @endslot

                                    @endcomponent
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                            کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                            ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                            مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                            yes
                                        @endslot

                                    @endcomponent
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                            کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                            ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                            مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                            yes
                                        @endslot

                                    @endcomponent
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                            کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                            ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                            مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                            yes
                                        @endslot

                                    @endcomponent
                                </tr>

                                {{--==========[ Table Row ]========= --}}
                                <tr>
                                    @component('components.MessageOutBoxTableRow')

                                        @slot('msg_sender')
                                            حمید وتر
                                        @endslot

                                        @slot('msg_text')
                                            کلاستروم به قدری به طور متراکم به چندیدن بخش حیاتی از مغر متصل شده است که فرانسیس کریک، ...
                                        @endslot

                                        @slot('msg_time')
                                            ۲۲:۳۰
                                        @endslot

                                        @slot('msg_date')
                                            ۱۳۹۶/۵/۶
                                        @endslot

                                        @slot('msg_receiver')
                                            مجتبی موسوی
                                        @endslot

                                        @slot('trash')
                                            yes
                                        @endslot

                                    @endcomponent
                                </tr>

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