<div class="adminCard hi-shadow-1 py-3">
    {{--============[ Row of Dissmis Btn ]===========--}}
    <div class="row">
        <div class="col-12 mb-2 pr-4">
            <button class="hi-button-btn1 pull-right dismissAdminCardBtn">
                <i class="fa fa-times hi-fontSize-21" aria-hidden="true"></i>
            </button>
        </div>
    </div>
    {{--============[ Row of Admin info ]===========--}}
    <div class="row">
        <div class="col-12 text-center">
            <img class="rounded-circle hi-size-9 mb-3" src="{{ asset('images/avatar.png') }}">
            <h3 class="hi-fontSize-16"><b>{{$admin_name}}</b></h3>
            <p  class="hi-fontSize-12 grey-text mb-2">{{$admin_mail}}</p>
            <p class="hi-fontSize-10 grey-text">{{$admin_desc}}</p>
        </div>
    </div>

    {{--============[ Row of Edit and dropdwon of roles ]===========--}}
    <div class="row">
        <div class="col-6 text-center">
            <button class="btn btn-secondary adminCard_btn hvr-sweep-to-top">ویرایش</button>
        </div>
        <div class="col-6 text-center">
            {{--============[ Admin Roles Dropdown ]===========--}}
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle adminCard_btn hvr-sweep-to-top" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    نقش
                </button>

                <div data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" class="dropdown-menu adminCard_dropdown hi-shadow-1" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#"> مدیر کل <i class="fa fa-user-circle-o ml-1" aria-hidden="true"></i></a>
                    <a class="dropdown-item" href="#"> مدیر بخش <i class="fa fa-user-circle-o ml-1" aria-hidden="true"></i></a>
                    <a class="dropdown-item" href="#"> مدیر بخش تغییرات<i class="fa fa-user-circle-o ml-1" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>