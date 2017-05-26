@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')
    <div class="row">
        <div class="col hi-subjectDashboardAdminProfile text-right">
            <h5 class="hi-subjectDashboardAdminProfile_h5">تاریخ ثبت نام<span> &nbsp;|&nbsp; </span>تاریخ آخرین ویرایش
                اطلاعات : 1396/5/20</h5>
        </div>
    </div>
    <form>
        <div class="row">
            <!-- about me -->
            <div class="col-8 mt-3">

                @component('components.PersonalInfoCard')
                    @slot('header_color')
                        blue-grey darken-1
                    @endslot

                    @slot('cardSubject')
                        :درباره ادمین
                    @endslot
                @endcomponent

            </div>

            <div class="col-4 mt-3">

                @component('components.AdminInfoCard')
                    @slot('header_color')
                        blue-grey darken-1
                    @endslot

                    @slot('characterName')
                      سبحان اسکندری
                    @endslot
                @endcomponent

            </div>
        </div>
    </form>
    <div class="row pr-5 mt-5">
        <div class="col-3 push-11">
            <button class="btn hi-confirmButtonDashboard light-blue darken-2" type="submit">تایید</button>
        </div>
    </div>
@endsection