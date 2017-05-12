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
                    <div class="homeCard"></div>
                </div>
                <div class="grid-item">
                    <div class="homeCard"></div>
                </div>

                <div class="grid-item grid-item--width2 grid-item--height2">
                    <div class="homeCard"></div>
                </div>

                <div class="grid-item grid-item--width2">
                    <div class="homeCard"></div>
                </div>
            </div>
            <div class="grid2">
                <div class="grid-item grid-item--width3">
                    <div class="homeCard"></div>
                </div>
                <div class="grid-item grid-item--width3">
                    <div class="homeCard"></div>
                </div>
                <div class="grid-item grid-item--width3">
                    <div class="homeCard"></div>
                </div>
            </div>

        </div>
    </section>

@endsection