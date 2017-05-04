@extends('layouts.main')

@section('content')
    <section class="adminsSection">

        {{--==========[ Row of buttons abpve table ]=========--}}
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-1 push-9 ml-5">
                    <button class="hi-button-btn1 orange ml-5 darken-2 hi-shadow-1 hi-size-4">
                        <i class="fa fa-trash white-text  hi-fontSize-20" aria-hidden="true"></i>
                    </button>
                </div>

                <div class="col-1 push-9">
                    <button class="hi-button-simple hi-shadow-0 ml-4 green darken-3">ایجاد</button>
                </div>
            </div>

            {{--==========[ Row of Admin Cards ]========= --}}
            <div class="row mt-4">
                <div class="col-3">
                    {{--==========[ Admin Card ]========= --}}
                    @component('components.AdminCard')
                        @slot('admin_name')سبحان اسکندری@endslot
                        @slot('admin_mail')
                                serprofessional@gmail.com
                        @endslot
                        @slot('admin_desc')توسط حمید وتر در ۹۲/۲/۲@endslot
                    @endcomponent
                </div>

                <div class="col-3">
                    {{--==========[ Admin Card ]========= --}}
                    @component('components.AdminCard')
                        @slot('admin_name')سبحان اسکندری@endslot
                        @slot('admin_mail')
                            serprofessional@gmail.com
                        @endslot
                        @slot('admin_desc')توسط حمید وتر در ۹۲/۲/۲@endslot
                    @endcomponent
                </div>

                <div class="col-3">
                    {{--==========[ Admin Card ]========= --}}
                    @component('components.AdminCard')
                        @slot('admin_name')سبحان اسکندری@endslot
                        @slot('admin_mail')
                            serprofessional@gmail.com
                        @endslot
                        @slot('admin_desc')توسط حمید وتر در ۹۲/۲/۲@endslot
                    @endcomponent
                </div>

                <div class="col-3">
                    {{--==========[ Admin Card ]========= --}}
                    @component('components.AdminCard')
                        @slot('admin_name')سبحان اسکندری@endslot
                        @slot('admin_mail')
                            serprofessional@gmail.com
                        @endslot
                        @slot('admin_desc')توسط حمید وتر در ۹۲/۲/۲@endslot
                    @endcomponent
                </div>
            </div>
        </div>

    </section>
@endsection