<div class="modal fade galleryModal bd-example-modal-lg" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">    <div class="modal-dialog modal-lg">        <div class="modal-content">            <div class="container">                {{--==========[ Delete Part ]=========--}}                <div class="row mt-2 px-4">                    <div class="col-12">                        <button class="hi-button-btn1 pull-right"><i class="fa grey-text text-darken-2 fa-2x fa-close"></i> </button>                    </div>                    <div class="col-6">                    </div>                </div>                {{--==========[ Dropzone to upload file ]=========--}}                <div class="row mt-2 px-4" id="gallery_row">                    <div class="col-12">                        {{--==========[ Dropzone to upload file ]=========--}}                        <div class="gallery_files p-0">                            {!! Form::open(['method'=>'POST', 'action'=>'PhotoController@store', 'class'=>'dropzone', 'id'=>'myAwesomeDropzone']) !!}                                <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">                            {!! Form::close() !!}                        </div>                    </div>                </div>                <hr>                <div class="row">                    <div class="col-12">                        <div class="btn-group pull-left ml-4" role="group" aria-label="Basic example">                            <button id="selectPhoto" type="button" class="hi-button-simple light-blue darken-2 ml-3">افزودن فایل</button>                        </div>                    </div>                </div>                <div class="row px-4 mt-3">                    <div class="col-12">                        <div class="container-fluid">                            {{ $gallery }}                        </div>                    </div>                </div>            </div>        </div>    </div></div>