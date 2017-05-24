{{--==========[ Table Row items ]========= --}}
<td>
    <div class="pure-checkbox mt-2 mr-2">
        <input id="msgOutbox_checkbox-{{$chk_name}}" class="checkbox-{{$chk_name}}" onclick="selectCmntCheckbox(event)" name="msgOutbox_checkbox-{{$chk_name}}" type="checkbox" >
        <label for="msgOutbox_checkbox-{{$chk_name}}"></label>
    </div>
</td>
<td class="text-right userInfoPlace py-1">
    <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
    <p class="username">{{$msg_sender}}</p>
</td>
<td class="text-right py-1">{{$msg_text}}</td>
<td class="py-1">
    <p class="my-0 text-left">{{$msg_time}}</p>
    <p class="my-0 text-left">{{$msg_date}}</p>
</td>
<td>{{$msg_receiver}}</td>

{{--==========[ More Button Dropdown ]========= --}}
<td>
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v grey-text text-darken-3 hi-fontSize-20" aria-hidden="true"></i>
        </button>
        @if(isset($trash))
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-undo ml-2" aria-hidden="true"></i>بازگردانی</a>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
            </div>
        @else
            {{--==========[ Dropdown Menu ]========= --}}
            <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
                <div class="dropdown-divider my-1"></div>
                <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
            </div>
        @endif
    </div>
</td>