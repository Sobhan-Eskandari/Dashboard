@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <div class="hi-whiteCategoryDashboardBox">
        <div class="row p-5">

            <div class="col-5 offset-1" id="boxOfTags">

            </div>

            <div class="col-4 offset-1 categoryRightDirection">
                <div class="row">
                    <div class="form-group">
                        <label for="hi-whiteCategoryDashboardBox_input"><h5> تگ ها:</h5></label>
                        <input id="chipsText" type="email" class="form-control hi-whiteCategoryDashboardBox_input">
                    </div>
                </div>
                <div class="row pr-1 pl-0">
                    <button  id="addChips" class="btn hi-whiteCategoryDashboardBox_button light-blue darken-2">تایید</button>
                </div>
            </div>

        </div>
    </div>
@endsection


