@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <div class="hi-whiteCategoryDashboardBox">
        <div class="row p-5">

            <div class="col-5 offset-1">
                <div class="row">
                    <table class="table hi-roundedDashboardTagsTable">
                        <thead class="hi-roundedDashboardTagsTable_thead">
                        <tr class="hi-roundedDashboardTagsTable_thead_tr_td_m">
                            <td class="pt-4 hi-roundedDashboardTagsTable_thead_tr_td_r text-right"><h5>دسته بندی ها</h5></td>

                            <td class="hi-roundedDashboardTagsTable_thead_tr_td_m"></td>

                            <td class="pl-4 hi-roundedDashboardTagsTable_thead_tr_td_l">
                                <button type="button" class="btn pull-left pt-2 pb-1 mt-1
                                 hi-roundedDashboardTagsTable_thead_tr_td_button">حذف
                                </button>
                            </td>
                        </tr>
                        </thead>
                        <tbody>

                        @for ($i = 0; $i < 8; $i++)
                            @component('components.CategoryRow')
                            @slot('chk_name'){{$i}}@endslot
                            @slot('style2')@endslot
                            @slot('style3')@endslot
                            @endcomponent
                        @endfor

                        {{--@component('components.CategoryRow')--}}
                        {{--@slot('style2')@endslot--}}
                        {{--@slot('style3')@endslot--}}
                        {{--@endcomponent--}}

                        {{--@component('components.CategoryRow')--}}
                        {{--@slot('style2')@endslot--}}
                        {{--@slot('style3')@endslot--}}
                        {{--@endcomponent--}}

                        {{--@component('components.CategoryRow')--}}
                        {{--@slot('style2')@endslot--}}
                        {{--@slot('style3')@endslot--}}
                        {{--@endcomponent--}}

                        {{--@component('components.CategoryRow')--}}
                        {{--@slot('style2')@endslot--}}
                        {{--@slot('style3')@endslot--}}
                        {{--@endcomponent--}}

                        {{--@component('components.CategoryRow')--}}
                        {{--@slot('style2')@endslot--}}
                        {{--@slot('style3')@endslot--}}
                        {{--@endcomponent--}}

                        {{--@component('components.CategoryRow')--}}

                        {{--@slot('style2')--}}
                        {{--border-bottom-right-radius: 10px;--}}
                        {{--@endslot--}}

                        {{--@slot('style3')--}}
                        {{--border-bottom-left-radius: 10px;--}}
                        {{--@endslot--}}
                        {{--@endcomponent--}}

                        </tbody>
                    </table>
                </div>
                <div class="row ml-4">
                    <nav class="mt-4 dashboardPaginatinBs">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link px-4" href="#">قبلی</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">۱<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">۲</a></li>
                            <li class="page-item"><a class="page-link" href="#">۳</a></li>
                            <li class="page-item"><a class="page-link" href="#">۴</a></li>
                            <li class="page-item"><a class="page-link" href="#">۵</a></li>
                            <li class="page-item pull-right"><a class="page-link" href="#">بعدی</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="col-4 offset-1 categoryRightDirection">
                <div class="row">
                    <div class="form-group">
                        <label for="hi-whiteCategoryDashboardBox_input"><h5>دسته بندی:</h5></label>
                        <input type="email" class="form-control hi-whiteCategoryDashboardBox_input">
                    </div>
                </div>
                <div class="row pr-1 pl-0">
                    <button class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2" type="submit">تایید</button>
                </div>
            </div>

        </div>
    </div>
@endsection


