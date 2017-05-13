@extends('layouts.main')

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="grid">
                {{--==========[ Stats Progress Part One Left ]=========--}}
                <div class="grid-item">
                    <div class="homeCard">
                        <div class="container-fluid">
                            {{--==========[ Horizental Stat Contains two parts of circular and text ]=========--}}
                            <div class="row horizentalStat">
                                <div class="col-7 horizentalStat_stat" id="stat1Container">
                                    <h5>ثبت نام ها</h5>
                                    <br>
                                </div>
                                <div class="col-5 horizentalStat_circular">
                                    <div id="stat1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--==========[ Stats Progress Part Second Left ]=========--}}
                <div class="grid-item">
                    <div class="homeCard">
                        <div class="homeCard">
                            <div class="container-fluid">
                                {{--==========[ Horizental Stat Contains two parts of circular and text ]=========--}}
                                <div class="row horizentalStat">
                                    <div class="col-7 horizentalStat_stat" id="stat2Container">
                                        <h5>بازدید سالانه</h5>
                                        <br>
                                    </div>
                                    <div class="col-5 horizentalStat_circular">
                                        <div id="stat2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--==========[ Stats Progress Part Third Left ]=========--}}
                <div class="grid-item">
                    <div class="homeCard">
                        <div class="homeCard">
                            <div class="container-fluid">
                                {{--==========[ Horizental Stat Contains two parts of circular and text ]=========--}}
                                <div class="row horizentalStat">
                                    <div class="col-7 horizentalStat_stat" id="stat3Container">
                                        <h5>بازدید ماهانه</h5>
                                        <br>
                                    </div>
                                    <div class="col-5 horizentalStat_circular">
                                        <div id="stat3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--==========[ Stats Progress Part Fourth Left ]=========--}}
                <div class="grid-item">
                    <div class="homeCard">
                        <div class="homeCard">
                            <div class="container-fluid">
                                {{--==========[ Horizental Stat Contains two parts of circular and text ]=========--}}
                                <div class="row horizentalStat">
                                    <div class="col-7 horizentalStat_stat" id="stat4Container">
                                        <h5>بازدید هفتگی</h5>
                                        <br>
                                    </div>
                                    <div class="col-5 horizentalStat_circular">
                                        <div id="stat4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="homeCard">
                        <div id="inlineDatepicker" class="col-xs-12 no-padding-side">
                            <div class="datepicker-plot-area datepicker-plot-area-inline-view">
                                <div class="navigator">
                                    <div class="datepicker-header">
                                        <div class="btn-next">&lt;</div>
                                        <div class="btn-switch">۱۳۹۵ دی</div>
                                        <div class="btn-prev">&gt;</div>
                                    </div>
                                </div>
                                <div class="datepicker-day-view" style="display: block;">
                                    <div class="month-grid-box">
                                        <div class="header">
                                            <div class="title"></div>
                                            <div class="header-row">
                                                <div class="header-row-cell">ش</div>
                                                <div class="header-row-cell">ی</div>
                                                <div class="header-row-cell">د</div>
                                                <div class="header-row-cell">س</div>
                                                <div class="header-row-cell">چ</div>
                                                <div class="header-row-cell">پ</div>
                                                <div class="header-row-cell">ج</div>
                                            </div>
                                        </div>
                                        <table cellspacing="0" class="table-days">
                                            <tbody>
                                            <tr>
                                                <td><span unixdate="1481920200000" class="other-month">۲۷</span></td>
                                                <td><span unixdate="1482006600000" class="other-month">۲۸</span></td>
                                                <td><span unixdate="1482093000000" class="other-month">۲۹</span></td>
                                                <td><span unixdate="1482179400000" class="other-month">۳۰</span></td>
                                                <td><span unixdate="1482265800000">۱</span></td>
                                                <td><span unixdate="1482352200000">۲</span></td>
                                                <td><span unixdate="1482438600000">۳</span></td>
                                            </tr>
                                            <tr>
                                                <td><span unixdate="1482525000000">۴</span></td>
                                                <td><span unixdate="1482611400000">۵</span></td>
                                                <td><span unixdate="1482697800000">۶</span></td>
                                                <td><span unixdate="1482784200000">۷</span></td>
                                                <td><span unixdate="1482870600000">۸</span></td>
                                                <td><span unixdate="1482957000000">۹</span></td>
                                                <td><span unixdate="1483043400000">۱۰</span></td>
                                            </tr>
                                            <tr>
                                                <td><span unixdate="1483129800000">۱۱</span></td>
                                                <td><span unixdate="1483216200000">۱۲</span></td>
                                                <td><span unixdate="1483302600000">۱۳</span></td>
                                                <td><span unixdate="1483389000000">۱۴</span></td>
                                                <td><span unixdate="1483475400000">۱۵</span></td>
                                                <td><span unixdate="1483561800000" class="selected">۱۶</span></td>
                                                <td><span unixdate="1483648200000">۱۷</span></td>
                                            </tr>
                                            <tr>
                                                <td><span unixdate="1483734600000">۱۸</span></td>
                                                <td><span unixdate="1483821000000">۱۹</span></td>
                                                <td><span unixdate="1483907400000">۲۰</span></td>
                                                <td><span unixdate="1483993800000">۲۱</span></td>
                                                <td><span unixdate="1484080200000">۲۲</span></td>
                                                <td><span unixdate="1484166600000">۲۳</span></td>
                                                <td><span unixdate="1484253000000">۲۴</span></td>
                                            </tr>
                                            <tr>
                                                <td><span unixdate="1484339400000">۲۵</span></td>
                                                <td><span unixdate="1484425800000">۲۶</span></td>
                                                <td><span unixdate="1484512200000">۲۷</span></td>
                                                <td><span unixdate="1484598600000">۲۸</span></td>
                                                <td><span unixdate="1484685000000">۲۹</span></td>
                                                <td><span unixdate="1484771400000">۳۰</span></td>
                                                <td><span unixdate="1484857800000" class="other-month">۱</span></td>
                                            </tr>
                                            <tr>
                                                <td><span unixdate="1484944200000" class="other-month">۲</span></td>
                                                <td><span unixdate="1485030600000" class="other-month">۳</span></td>
                                                <td><span unixdate="1485117000000" class="other-month">۴</span></td>
                                                <td><span unixdate="1485203400000" class="other-month">۵</span></td>
                                                <td><span unixdate="1485289800000" class="other-month">۶</span></td>
                                                <td><span unixdate="1485376200000" class="other-month">۷</span></td>
                                                <td><span unixdate="1485462600000" class="other-month">۸</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="datepicker-month-view" style="display: none;">
                                    <div class="month1 month-item">فروردین</div>
                                    <div class="month2 month-item selected">اردیبهشت</div>
                                    <div class="month3 month-item">خرداد</div>
                                    <div class="month4 month-item">تیر</div>
                                    <div class="month5 month-item">مرداد</div>
                                    <div class="month6 month-item">شهریور</div>
                                    <div class="month7 month-item">مهر</div>
                                    <div class="month8 month-item">آبان</div>
                                    <div class="month9 month-item">آذر</div>
                                    <div class="month10 month-item">دی</div>
                                    <div class="month11 month-item">بهمن</div>
                                    <div class="month12 month-item">اسفند</div>
                                </div>
                                <div class="datepicker-year-view" style="display: none;">
                                    <div class="year-item">۱۳۹۲</div>
                                    <div class="year-item">۱۳۹۳</div>
                                    <div class="year-item">۱۳۹۴</div>
                                    <div class="year-item">۱۳۹۵</div>
                                    <div class="year-item selected">۱۳۹۶</div>
                                    <div class="year-item">۱۳۹۷</div>
                                    <div class="year-item">۱۳۹۸</div>
                                    <div class="year-item">۱۳۹۹</div>
                                    <div class="year-item">۱۴۰۰</div>
                                    <div class="year-item">۱۴۰۱</div>
                                    <div class="year-item">۱۴۰۲</div>
                                    <div class="year-item">۱۴۰۳</div>
                                </div>
                                <div class="toolbox ">
                                    <div class="btn-today">امروز</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--==========[Clock Widget in Home Page ]=========--}}
                <div class="grid-item">
                    <div class="homeCard clockCard">
                        <div class="fill">
                            <div class="clock
                                 hour-style-pill
                                 hour-text-style-large
                                 hour-display-style-all
                                 minute-style-line
                                 minute-display-style-fine-2
                                 minute-text-style-outside
                                 hand-style-hollow" id="utility-clock">

                                <div class="centre">
                                    <div class="dynamic"></div>
                                    <div class="expand round circle-1"></div>
                                    <div class="anchor hour">
                                        <div class="element thin-hand"></div>
                                        <div class="element fat-hand"></div>
                                    </div>
                                    <div class="anchor minute">
                                        <div class="element thin-hand"></div>
                                        <div class="element fat-hand minute-hand"></div>
                                    </div>
                                    <div class="anchor second">
                                        <div class="element second-hand second-hand-front"></div>
                                        <div class="element second-hand second-hand-back"></div>
                                    </div>
                                    <div class="expand round circle-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="grid-item grid-item--width2 grid-item--height2">--}}
                    {{--<div class="homeCard"></div>--}}
                {{--</div>--}}

                {{--<div class="grid-item grid-item--width2">--}}
                    {{--<div class="homeCard"></div>--}}
                {{--</div>--}}
            </div>
            {{--<div class="grid2">--}}
                {{--<div class="grid-item grid-item--width3">--}}
                    {{--<div class="homeCard"></div>--}}
                {{--</div>--}}
                {{--<div class="grid-item grid-item--width3">--}}
                    {{--<div class="homeCard"></div>--}}
                {{--</div>--}}
                {{--<div class="grid-item grid-item--width3">--}}
                    {{--<div class="homeCard"></div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </section>

@endsection