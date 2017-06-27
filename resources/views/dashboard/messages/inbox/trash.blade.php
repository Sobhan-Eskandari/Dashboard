@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid">

                    {{--==========[ Row of buttons abpve table ]========= --}}
                    <div class="row">
                        <div class="col-1 push-11 ml-2 text-right">
                            {!! Form::open(['method'=>'POST', 'action'=>'InboxController@multiDestroy', 'id'=>'deleteForm']) !!}
                                <button id="multiDestroy" type="button" class="hi-button-simple hi-shadow-0 yellow darken-3">حذف دائمی</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div id="loadInboxes">
                        @include('Includes.AllInboxesTrash')
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/inboxTrashIndex.js') }}"></script>
@endsection