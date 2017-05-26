<tr>
    <td style="{{ $style2 }}">

        <li class="hi-roundedDashboardTagsTable_tbody_tr_td_li text-right">
            {{--<label class='hi-roundedDashboardTagsTable_tbody_tr_td_li_square-checkbox'>--}}
                {{--<input type='checkbox' class="pull-right">--}}
                {{--&nbsp;--}}
                {{--<span>آموزش آمار</span>--}}
            {{--</label>--}}
            <div class="pure-checkbox mt-2 mr-2">
                <input id="admins_checkbox-{{$chk_name}}" class="checkbox-{{$chk_name}}" onclick="selectCmntCheckbox(event)" name="admins_checkbox-{{$chk_name}}" type="checkbox" >
                <label for="admins_checkbox-{{$chk_name}}">آموزش آمار</label>
            </div>
        </li>

    </td>
    <td class="hi-roundedDashboardTagsTable_tbody_tr_td_edit text-center"><a href="#">ویرایش</a></td>
    <td class="hi-roundedDashboardTagsTable_tbody_tr_td_delete text-left pl-4" style="{{ $style3 }}"><a href="#">حذف</a></td>
</tr>

