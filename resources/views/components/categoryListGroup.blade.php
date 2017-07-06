<div class="col-10 list-group hi-categoryListGroup">

     {{-----------[ Row Of Search and Menu Opener ] ------------}}
    <div class="row menuDetector">
        <div class="col-12">
            <div class="list-group-item justify-content-between pl-4 pr-3 hi-infoPostListGroupFlip py-2" id="{{$createCategoryTagsID}}">
                <span class="categoryTitle">{{$categoryName}}</span>
                <div class="row">
                    {{-----------[ Search Icon ] ------------}}
                    <div class="col-1">
                        <i class="fa fa-search iconSearch-2 pt-3" aria-hidden="true"></i>
                    </div>
                    {{-----------[ Search Input ] ------------}}
                    <div class="col-9">
                        <input type="text" class="form-control searchFormListGroup mr-2 pb-1 hi-fontSize-13"
                               placeholder="جستجو کنید">
                    </div>
                    {{-----------[ Close Menu ] ------------}}
                    <div class="col-1 pr-0">
                        <i class="fa fa-times iconClose-2 pt-3 mr-3" aria-hidden="true"></i>
                    </div>
                </div>
                <i class="fa fa-search iconSearch-1" aria-hidden="true"></i>

                {{-----------[ Menu Opener ] ------------}}
                <i class="fa fa-caret-down pull-left pt-1 caretIcon flip is-open"  aria-hidden="true"></i>
            </div>
        </div>
    </div>

    {{-----------[ Row Of Items in List could be tags or ... ] ------------}}
    <div class="row">
        <div class="col-12">
            <div id="hi-CategoryListGroupPanel" class="panel">
                <ul class="pr-0 overflowBox">

                    {{-----------[ Earch List Row (li) ] ------------}}
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>آمار</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>داده کاوی</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>هوش مصنوعی</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>آمار</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>داده کاوی</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                    <li class="list-group-item justify-content-between ">
                        <label class='hi-categoryListGroup_li_square-checkbox'>
                            <input type='checkbox' class="pull-right">
                            &nbsp;
                            <span>هوش مصنوعی</span>
                        </label>
                        <button class="hi-button-btn1" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </li>
                </ul>
                <hr class="mb-1">
                {{-----------[ Add tag or category to list ] ------------}}
                <div class="row">
                    <div class="col-12">
                        @component('components.AddCategory')
                            @slot('btn_name')
                                {{$category_btn}}
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
