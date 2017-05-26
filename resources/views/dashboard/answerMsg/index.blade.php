@extends('layouts.main')

@section('content')

    <div class="row answerPmBox">
        <div class="card answerMsgFormCard">
            <div class="card-header px-4 answerMsgFormCard_header py-2">
                <span class="pull-right"> حمید وتر &nbsp; &nbsp;|&nbsp; &nbsp; ۱۳۹۶/۰۳/۰۴</span>
                <span class="pull-left">hamid.vetr@live.com</span>
            </div>
            <div class="card-block px-4">
                <p class="card-text answerMsgFormCard_text">
                    چهار : پارالمپیک و اولین مدال ما در همان روز اول. بازی تیم های فوتبال هفت نفره و بسکتبال با ویلچر ایران برابر آرژانتین و آلمان هم فوق العاده بود. بدون هیچ ترحمی به قهرمان هایمان افتخار کنیم. آنها بهترینند.
                    پنج : موفقیت قطعه "چتر خیس" با صدای حامد همایون از سه جهت مهم است: اول اینکه همچنان می توانیم به آثار همه گیرشدن یک آهنگ خوشبین باشیم. دوم اینکه "چتر خیس" در داخل کشور تولید شده و سوم اینکه حامد همایون توانسته بدون استفاده از ابزاری مثل کلیپ و تیتراژ، آهنگش را به محبوبیت برساند.
                </p>

            </div>
        </div>
    </div>
    <br>
    <div class="row answerPmBox">
        <div class="card answerMsgFormCard">
            <div class="card-header answerMsgFormCard_header py-2">
               <span class="pull-right pt-2">پاسخ به:hamid.vetr@gmail.com</span>
                <span class="pull-left">
                     <input type="email" class="form-control answerMsgFormCard_form" placeholder="موضوع را وارد کنید.">
                </span>
                <span class="pull-left pt-2">
                    موضوع:&nbsp;
                </span>
            </div>
            <div class="card-block p-0">
                <textarea class="form-control answerMsgFormCard_textarea" id="exampleTextarea" rows="8" placeholder="متن پاسخ را وارد کنید"></textarea>
            </div>
        </div>
    </div>


@endsection