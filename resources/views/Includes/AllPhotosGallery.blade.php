<div class="col-12">    <div class="container-fluid">        <div class="row gallery_files l-rtl gallery_uploadedImage">            @if($photos)            @foreach($photos as $photo)            <div class="col-2 text-center">                <div class="pure-checkbox mt-2 mr-2">                    <input id="img-id-{{$photo->id}}"  onclick="" name="img-radio" type="checkbox" value="{{$photo->id}}">                    <label for="img-id-{{$photo->id}}" class="img-radioBtn">                        <img class="rounded img-fluid my-3" src="{{asset('photos/'.$photo->name)}}">                    </label>                </div>            </div>                @endforeach                @endif        </div>    </div></div>{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js"></script>--}}<script src="{{asset('/js/dropzone.js')}}"></script><script src="{{asset('js/dashboard/allPhotosGallery.js')}}"></script>