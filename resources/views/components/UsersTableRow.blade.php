{{--==========[ Table Row items ]========= --}}
<td><input type="checkbox"></td>
<td class="py-1 text-right userInfoPlace">
    <img class="rounded-circle Topbar_avatar" src="{{ asset('images/avatar.png') }}">
    <p class="username">{{$user_username}}</p>
</td>
<td>{{$user_fullname}}</td>
<td>{{$user_email}}</td>
<td>{{$user_number}}</td>
<td><img class="img-fluid userConfirmTick" src="{{ asset('images/tick.png') }}"></td>

{{--==========[ More Button Dropdown ]========= --}}
<td>
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
        </button>
        {{--==========[ Dropdown Menu ]========= --}}
        <div data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-eye ml-2" aria-hidden="true"></i>مشاهده</a>
            <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i> ویرایش</a>
            <div class="dropdown-divider my-1"></div>
            <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
        </div>
    </div>
</td>