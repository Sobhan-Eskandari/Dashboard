
    <div class="hi-profileCard_PictureSelectorBox_pictureBox_hover" >
    <figure>
    <img src="{{ isset($photo) ? asset('UserImage/'.$photo->address):asset('images/nobody_m.original.jpg') }}"
         class="hi-profileCard_PictureSelectorBox_picture img-fluid"
         alt="Responsive image" data-id=""></figure>
    </div>
    {!! Form::text('avatar',isset($photo)?$photo->id:'',['readonly','id'=>'avatar','hidden']) !!}
