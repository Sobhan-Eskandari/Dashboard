@extends('layouts.main')

@section('breadcrumb')
    @component('components.Breadcrumb')

    @endcomponent
@endsection

@section('content')


    <section class="usersSection">
        <div class="row mb-5">
            <div class="col-12">
                <div class="container-fluid">
                    {!! Form::open(['method'=>'POST', 'url' => 'tiny']) !!}

                    {{--==========[ Sample Gallery Modal Lunch ]========= --}}
                    <div class="row">
                        <div class="col-12 text-right mt-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Launch demo modal
                            </button>
                        </div>
                    </div>

                    {{--==========[ Row of Informations about site ]========= --}}
                        <div class="row text-right contactUsInfo">
                            <div class="col-12 bgCard px-4 hi-shadow-1">
                                <h5>اطلاعات تماس</h5>
                                <hr class="contactUsInfo_line">

                                <label for="contactInfo" class="hi-fontSize-18"><b>: درباره تماس</b></label>
                                <textarea name="contactus" id="contactInfo" class="contactUsInfo_textarea"></textarea>

                                <label for="siteInfo" class="mt-3 hi-fontSize-18"><b>: درباره سایت</b></label>
                                <textarea name="aboutSite" id="siteInfo" class="contactUsInfo_textarea"></textarea>

                                {{--==========[ Row of Informations about site ]========= --}}
                                <div class="row rowOfInputs mt-4" >
                                    <div class="col-3 pl-5">
                                        <label for="name">نام :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="name">
                                    </div>

                                    <div class="col-3 pl-5">
                                        <label for="lastname">نام خانوادگی :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="lastname">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="siteName">نام سایت :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="siteName">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="zipcode">کدپستی :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="zipcode">
                                    </div>
                                </div>

                                {{--==========[ Row of Informations about site ]========= --}}
                                <div class="row rowOfInputs mt-3" >
                                    <div class="col-3 pl-5">
                                        <label for="phonenumber">تلفن ثابت :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="phonenumber">
                                    </div>

                                    <div class="col-3 pl-5">
                                        <label for="phonenumber2">تلفن ثابت ۲ :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="phonenumber2">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="mobilenumber">تلفن همراه :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="mobilenumber">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="mobilenumber2">تلفن همراه ۲ :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="mobilenumber2">
                                    </div>
                                </div>

                                {{--==========[ Row of Informations about site ]========= --}}
                                <div class="row rowOfInputs mt-3" >
                                    <div class="col-6 pl-5">
                                        <label for="email">پست الکترونیکی  :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="email">
                                    </div>

                                    <div class="col-6 pr-5">
                                        <label for="address">آدرس :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="address">
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{--==========[ Row of Informations about site ]========= --}}
                        <div class="row text-right contactUsInfo mt-5">
                            <div class="col-12 bgCard px-4 pb-5 hi-shadow-1">
                                <h5>شبکه های اجتماعی</h5>
                                <hr class="contactUsInfo_line">

                                {{--==========[ Row of Informations about site ]========= --}}
                                <div class="row rowOfInputs mt-4" >
                                    <div class="col-3 pl-5">
                                        <label for="telegram">تلگرام :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="telegram">
                                    </div>

                                    <div class="col-3 pl-5">
                                        <label for="instagram">اینستاگرام :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="instagram">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="facebook">فیسبوک :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="facebook">
                                    </div>

                                    <div class="col-3 pr-5">
                                        <label for="linkedin">لینکدین :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="linkedin">
                                    </div>
                                </div>

                                {{--==========[ Row of Informations about site ]========= --}}
                                <div class="row rowOfInputs mt-3" >
                                    <div class="col-3 pl-5">
                                        <label for="aparat">آپارات :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="aparat">
                                    </div>

                                    <div class="col-3 pl-5">
                                        <label for="tweeter">توییتر :</label>
                                        <input  type="text" class="form-control hi-input-simple" id="tweeter">
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="rulesAndGuidesInfo text-right mt-5">
                            <label for="contactInfo"><b>: قوانین و مقررات</b></label><br>
                            <textarea name="rules" id="contactInfo" class="rulesAndGuidesInfo_textarea hi-shadow-1"></textarea>
                            <br>
                            <label for="siteInfo" class="mt-3"><b>: راهنما</b></label><br>
                            <textarea name="guide" id="siteInfo" class="rulesAndGuidesInfo_textarea hi-shadow-1"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-12 text-right mt-4">
                                <button type="submit" class="hi-button-simple light-blue darken-2 mb-5 mt-4">ذخیره تغییرات</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        {{--==========[ Gallery Modal ]========= --}}
        <div class="modal fade galleryModal bd-example-modal-lg"
             id="myModal" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="row" id="gallery_row">

                        {{--==========[ Selected file Info ]========= --}}
                        <div class="col-3 galleryFiles_info">
                            <div class="row">
                                <div class="col-12 text-right mt-5">
                                    <p>: فایل انتخاب شده</p>

                                    {{--==========[ File Image ]========= --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <img class="img-fluid" src="{{asset('images/paris-sm.jpg')}}">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <button type="button" class="btn btn-outline-danger">حذف</button>
                                        </div>
                                    </div>
                                    {{--==========[ File Info ]========= --}}
                                    <div class="row mb-5">
                                        <div class="col-12">
                                            <ul class="file_info">
                                                <li>bill-gates.jp</li>
                                                <li>24 march 2017</li>
                                                <li>45kb</li>
                                                <li>564 x 343</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-12 text-left mt-5 pt-5">
                                            <button type="submit" class="hi-button-simple light-blue darken-2 mt-5">افزودن به پیوست</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--==========[ Dropzone to upload file ]========= --}}
                        <div class="col-7 gallery_files">
                            <form action="/" method="post" class="dropzone" id="my-awesome-dropzone"></form>
                        </div>

                        {{--==========[ Category of Gallery Files ]========= --}}
                        <div class="col-2 pl-0">
                            <ul class="gallery_category pl-0">
                                <li><button type="button" class="btn gallery_category_btn">همه فایل ها</button></li>
                                <li><button type="button" class="btn gallery_category_btn">عکس</button></li>
                                <li><button type="button" class="btn gallery_category_btn">فیلم</button></li>
                                <li><button type="button" class="btn gallery_category_btn">صدا</button></li>
                                <li><button type="button" class="btn gallery_category_btn">متن</button></li>
                                <li><button type="button" class="btn gallery_category_btn">بقیه فایل ها</button></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
            CKEDITOR.replace( 'contactus' );
            CKEDITOR.replace( 'aboutSite' );
            CKEDITOR.replace( 'rules' );
            CKEDITOR.replace( 'guide' );
        </script>

    </section>


@endsection