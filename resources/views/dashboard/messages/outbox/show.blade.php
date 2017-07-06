@extends('layouts.main')

@section('content')

    <div class="row answerPmBox">
        <div class="card answerMsgFormCard">
            <div class="card-header px-4 answerMsgFormCard_header py-2">
                <span class="pull-right"> {{ $outbox->inbox->full_name }} &nbsp; &nbsp;|&nbsp; &nbsp; {{ $outbox->inbox->created_at->format('y/m/d') }}</span>
                <span class="pull-left">{{ $outbox->inbox->email }}</span>
            </div>
            <div class="card-block px-4">
                <p class="card-text answerMsgFormCard_text">{{ $outbox->inbox->message }}</p>
            </div>
        </div>
    </div>
    <br>
    <div class="row answerPmBox">
        <div class="card answerMsgFormCard">
            <div class="card-header px-4 answerMsgFormCard_header py-2">
                <span class="pull-right"> {{ $outbox->user->full_name }} &nbsp; &nbsp;|&nbsp; &nbsp; {{ $outbox->created_at->format('y/m/d') }}</span>
                <span class="pull-left">{{ $outbox->user->email }}</span>
            </div>
            <div class="card-block px-4">
                <p class="card-text answerMsgFormCard_text">{{ $outbox->message }}</p>
            </div>
        </div>
    </div>
    <br>
@endsection