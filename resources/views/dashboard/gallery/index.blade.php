@extends('layouts.main')

@section('content')

    <section class="usersSection">
        <div class="row">
            <div class="col-12 bgCard hi-shadow-2">
                <div class="container galleryModal">
                    {{--==========[ Dropzone to upload file ]=========--}}
                    <div class="row mt-2 px-4" id="gallery_row">
                        <div class="col-12">
                            {{--==========[ Dropzone to upload file ]=========--}}
                            <div class="gallery_files p-0">
                                <form action="/file-upload"
                                      class="dropzone"
                                      id="my-awesome-dropzone">
                                    <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="btn-group pull-left ml-4" role="group" aria-label="Basic example">
                                <button type="submit" class="hi-button-simple light-blue darken-2 ml-3">افزودن فایل</button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="btn-group pull-right mr-4" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-danger mr-4">حذف</button>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4 mt-3">
                        <div class="col-12">
                            <div class="container-fluid">
                                <div class="row gallery_files l-rtl gallery_uploadedImage">
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-checkbox mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="checkbox" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-1" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-1" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-2" onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-2" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="pure-radiobutton mt-2 mr-2">
                                            <input id="img-id-3"  onclick="" name="img-radio" type="radio" >
                                            <label for="img-id-3" class="img-radioBtn">
                                                <img class="rounded img-fluid my-3" src="{{asset('images/avatar.png')}}">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection