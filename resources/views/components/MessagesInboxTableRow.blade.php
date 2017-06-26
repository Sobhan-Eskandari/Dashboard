{{--==========[ Table Row items ]========= --}}
<td>
    <div class="pure-checkbox mt-2 mr-2">
        <input id="{{ $id }}" class="checkbox-{{ $id }}" onclick="selectCmntCheckbox(event)" name="{{ $id }}" type="checkbox" >
        <label for="{{ $id }}"></label>
    </div>
</td>
<td class="py-1 text-right userInfoPlace">
    <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
    <p class="username"><b>{{ $full_name }}</b></p>
</td>
<td class="text-right">{{ $message }}</td>
<td class="py-1">
    <p class="my-1 text-right hi-fontSize-14"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $time }}</p>
    <p class="my-1 text-right hi-fontSize-14"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $date }}</p>
</td>
<td>
    @if(isset($answered))
        <i class="fa fa-2x fa-times red-text" aria-hidden="true"></i>
    @else
        <i class="fa fa-check fa-2x green-text" aria-hidden="true"></i>
    @endif
</td>

{{--==========[ More Button Dropdown ]========= --}}
<td>
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
        </button>
        @if(isset($trash))
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-undo ml-2" aria-hidden="true"></i>بازگردانی</a>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
            </div>
        @else
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="{{ route('inbox.show', $id) }}"><i class="fa fa-reply ml-2" aria-hidden="true"></i>پاسخ</a>
                <div class="dropdown-divider my-1"></div>
                {!! Form::open(['method'=>'DELETE', 'action'=>['InboxController@destroy', $id]]) !!}
                    {!! Form::submit('حذف', ['id'=>'delete', 'style' => 'background: none; border: none;']) !!}
                {!! Form::close() !!}
                {{--<a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>--}}
            </div>
        @endif
    </div>
</td>