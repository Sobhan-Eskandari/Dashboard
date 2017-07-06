{{--==========[ Table Row items ]========= --}}
<td>
    <div class="pure-checkbox mt-2 mr-2">
        <input id="{{ $id }}" class="checkbox-{{$id}}" onclick="selectCmntCheckbox(event)" name="{{$id}}" type="checkbox" >
        <label for="{{ $id }}"></label>
    </div>
</td>
<td class="text-right userInfoPlace py-1">
    <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
    <p class="username">{{ $admin_name }}</p>
</td>
<td class="text-right py-1 hi-fontSize-15">{{ $message }}</td>
<td class="py-1">
    <p class="my-1 text-right hi-fontSize-14"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $time }}</p>
    <p class="my-1 text-right hi-fontSize-14"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $date }}</p>
</td>
<td>{{ $full_name }}</td>

{{--==========[ More Button Dropdown ]========= --}}
<td>
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v grey-text text-darken-3 hi-fontSize-20" aria-hidden="true"></i>
        </button>
        {{--==========[ Dropdown Menu ]========= --}}
        <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
            {{--<a class="dropdown-item text-right py-0" href="{{ route('outbox.restore', $id) }}"><i class="fa fa-undo ml-2" aria-hidden="true"></i>بازگردانی</a>--}}
            {!! Form::open(['method'=>'POST', 'action'=>['OutboxController@restore', $id], 'class'=>'restore']) !!}
                {!! Form::submit('بازگردانی', ['id'=>'restore', 'style' => 'background: none; border: none;']) !!}
            {!! Form::close() !!}
            <div class="dropdown-divider my-1"></div>
            {!! Form::open(['method'=>'DELETE', 'action'=>['OutboxController@forceDestroy', $id], 'class'=>'singleDestroy']) !!}
                {!! Form::submit('حذف', ['id'=>'delete', 'style' => 'background: none; border: none;']) !!}
            {!! Form::close() !!}
            {{--<a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>--}}
        </div>
    </div>
</td>