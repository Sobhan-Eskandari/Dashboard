{{--==========[ Gallery Table Row items ]========= --}}
<td><input type="checkbox"></td>
<td class="py-1 text-center userInfoPlace">
    <img class="rounded img-fluid hi-size-5" src="{{ asset('images/avatar.png') }}">
    <p class="username">{{$file_name}}</p>
</td>
<td>{{$file_uploader}}</td>
<td>{{$file_content}}</td>
<td>{{$file_date}}</td>

{{--==========[ Delete Button ]========= --}}
<td class="px-1">
    <button class="btn btn-secondary hi-shadow-0  py-1 px-1 deleteRowBtn" type="button" id="dropdownMenuButton">
        <i class="fa fa-trash black-text hi-fontSize-20" aria-hidden="true"></i>
    </button>
</td>