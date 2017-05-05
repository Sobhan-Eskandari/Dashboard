{{--==========[ Table Row items ]========= --}}
<td><input type="checkbox"></td>
<td class="text-right py-1">
    <p class="my-1">{{$post_name}}</p>
    <p class="grey-text my-1 hi-fontSize-12">{{$post_editedBy}}</p>
</td>
<td>{{$post_author}}</td>
<td>{{$post_category}}</td>
<td>{{$post_tag}}</td>
{{--==========[ Post Info ]========= --}}
<td class="py-1">
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-calendar" aria-hidden="true"></i> {{$post_date}}</p>
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-comments" aria-hidden="true"></i> {{$post_commentsCount}}</p>
    <p class="my-1 text-right hi-fontSize-12"><i class="fa fa-eye" aria-hidden="true"></i> {{$post_views}}</p>
</td>

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
            <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-trash ml-2" aria-hidden="true"></i>حذف</a>
            <a class="dropdown-item text-right py-0 mt-1" href="#"><i class="fa fa-lock ml-2" aria-hidden="true"></i>قفل پست</a>
        </div>
    </div>
</td>