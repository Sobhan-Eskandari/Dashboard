<div class="card backupExportCard">
    <h6 class="card-header backupMainTitleCard" style="{{ $style }}">
        {{$font_awesome}}
    </h6>
    <div class="card-block">
        <div class="row px-3">
            <h6 class="card-title backupExportCard_title">نوع فایل خروجی خود را انتخاب کنید:</h6>
        </div>
        <br>
        <div class="row px-3">
            <div class="col-6 pr-4">
                <button type="button" class="btn btn-primary pull-right backupExportTypeButton">Excel</button>
            </div>
            <div class="col-6 pl-4">
                <button type="button" class="btn btn-primary pull-left backupExportTypeButton">PDF</button>
            </div>
        </div>
        <br>
        <div class="row px-3">
            <h6 class="card-title backupExportCard_title">بازه زمانی خود مد نظر خود را وارد کنید:</h6>
        </div>
        <br>
        <div class="row pl-3 pr-3 btn-group-justified backupGroupButton">
            <h6 class="card-title pt-2 backupExportCard_title">از:&nbsp;</h6>
            <select class="py-1 px-1 backupSelect pull-right">
                <option value="volvo">۱۳۹۶/۰۳/۰۴&nbsp;</option>
                <option value="saab">۱۳۹۶/۰۴/۰۴&nbsp;</option>
                <option value="vw">۱۳۹۶/۰۳/۰۴&nbsp;</option>
                <option value="audi" selected>۱۳۹۶/۰۴/۱۰&nbsp;</option>
            </select>
            <h6 class="card-title pt-2 backupExportCard_title">&nbsp;&nbsp;تا:&nbsp;</h6>
            <select class="py-1 px-1 backupSelect pull-left">
                <option value="volvo">۱۳۹۶/۰۳/۰۴&nbsp;</option>
                <option value="saab">۱۳۹۶/۰۴/۰۴&nbsp;</option>
                <option value="vw">۱۳۹۶/۰۳/۰۴&nbsp;</option>
                <option value="audi" selected>۱۳۹۶/۰۴/۱۰&nbsp;</option>
            </select>
        </div>
        <br>
        <div class="row px-3">
            <button type="button" class="btn btn-primary pull-left backupExportButton" style="{{ $style }}">
                <i class="fa fa-download" aria-hidden="true"></i>&nbsp;دریافت خروجی
            </button>
        </div>
    </div>
    <br>
</div>