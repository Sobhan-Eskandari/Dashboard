<?php

namespace App\Http\Controllers;

use App\Http\Requests\OutboxStoreRequest;
use App\Inbox;
use App\Mail\AnswerMessage;
use App\Outbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Morilog\Jalali\Facades\jDate;

class OutboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.messages.outbox.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OutboxStoreRequest $request)
    {
        $input = $request->all();
        $inbox = Inbox::findOrFail($input['inbox_id']);
        $inbox->status = 2;
        $inbox->answered_by = Auth::user()->id;;
        $inbox->answered_at = jDate::forge('now')->format('datetime', true);
        $inbox->save();
        $input['created_by'] = Auth::user()->id;
        Outbox::create($input);
        Mail::to($input['email'])->send(new AnswerMessage($input));
        Session::flash('success', 'ایمیل با موفقیت ارسال شد');
        return redirect(route('inbox.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Outbox  $outbox
     * @return \Illuminate\Http\Response
     */
    public function show(Outbox $outbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Outbox  $outbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Outbox $outbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Outbox  $outbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outbox $outbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Outbox  $outbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outbox $outbox)
    {
        //
    }

    public function trash()
    {
        return view('dashboard.messages.outbox.trash');
    }
}
