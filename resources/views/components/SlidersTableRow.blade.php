{{--==========[ Gallery Table Row items ]========= --}}
<td>
    <div class="pure-checkbox mt-2 mr-2">
        <input id="sliders_checkbox-{{$chk_name}}" class="checkbox-{{$chk_name}}" onclick="selectCmntCheckbox(event)" name="sliders_checkbox-{{$chk_name}}" type="checkbox" >
        <label for="sliders_checkbox-{{$chk_name}}"></label>
    </div>
</td>
<td class="py-1 text-center">
    <div class="userInfoPlace">
        <img class="rounded img-fluid hi-size-7" src="{{ asset('images/' . $avatar) }}">
        <div>
            <p class="username mt-3"> {{$slider_text}} </p>
            <p class="grey-text hi-fontSize-12 text-right pr-2">{{$slider_edited}}</p>
        </div>

    </div>
</td>

{{--==========[ Order of Slider Button ]========= --}}
<td class="px-1">
    <div class="Topbar_dropdown dropdown slider_table_dropDown">

        <button class="btn btn-secondary dropdown-toggle py-0 px-0 pr-2 black-text" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ۴
            <i class="fa fa-chevron-down white-text grey py-1 px-1 mr-1 hi-fontSize-15" aria-hidden="true"></i>
        </button>

        {{--==========[ Dropdown Menu ]========= --}}
        <div class="dropdown-menu hi-shadow-2 py-0 ml-2" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-right mt-1 py-1" href="#">۱</a>
            <div class="dropdown-divider mb-1 mt-1"></div>
            <a class="dropdown-item text-right my-0 py-1" href="#">۲</a>
            <div class="dropdown-divider mb-1 mt-1"></div>
            <a class="dropdown-item text-right my-0 py-1" href="#">۳</a>
            <div class="dropdown-divider mb-1 mt-1"></div>
            <a class="dropdown-item text-right my-0 py-1" href="#">۴</a>
        </div>
    </div>
</td>

{{--==========[ More Button ]========= --}}
<td class="px-1">
    <div class="Topbar_dropdown dropdown table_dropDown">
        <button class="btn btn-secondary dropdown-toggle py-1 px-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v black-text hi-fontSize-20" aria-hidden="true"></i>
        </button>
        {{--==========[ Dropdown Menu ]========= --}}
        <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu hi-shadow-2" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-right py-0" href="#"><i class="fa fa-pencil ml-2" aria-hidden="true"></i>ویرایش</a>
            <div class="dropdown-divider my-1"></div>
            <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
        </div>
    </div>
</td>