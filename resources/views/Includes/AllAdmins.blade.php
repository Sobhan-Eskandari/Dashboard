{{--==========[ Row of Admin Cards ]========= --}}@foreach($admins as $admin)    @if($loop->first || $loop->iteration % 4 == 1)        <div class="row mt-4">            @endif            <div class="col-3">                {{--==========[ Admin Card ]========= --}}                @component('components.AdminCard')                    @slot('id') {{ $admin->id }} @endslot                    @slot('full_name') {{ $admin->full_name }} @endslot                    @slot('email') {{ $admin->email }} @endslot                    @slot('description')توسط {{ $admin->parent->full_name }} در {{ $admin->created_at->format('y/m/d') }}@endslot                    @slot('role_id') {{ $admin->role->id }} @endslot                @endcomponent            </div>            @if($loop->last || $loop->iteration % 4 == 0)        </div>    @endif@endforeach<script src="{{ asset('js/dashboard/adminAll.js') }}"></script>