@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container-fluid" id="loadAdmins">
                    @include('Includes.AllAdminsTrash')
                </div>
            </div>
        </div>
    </section>

@endsection

@section('javascript')
    <script src="{{ asset('js/dashboard/adminTrashIndex.js') }}"></script>
@endsection