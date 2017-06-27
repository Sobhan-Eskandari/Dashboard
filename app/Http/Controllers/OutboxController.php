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
    public function index(Request $request)
    {
        $outboxes = Outbox::orderBy('created_at', 'desc')->paginate(8);

        if($request->has('query')){
            $outboxes = Outbox::search($request->input('query'))->orderBy('created_at', 'desc')->paginate(8);
        }

        if ($request->ajax()) {
            return view('Includes.AllOutboxes', compact('outboxes'))->render();
        }

        return view('dashboard.messages.outbox.index', compact('outboxes'));
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
        return view('dashboard.messages.outbox.show', compact('outbox'));
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
    public function destroy(Request $request, Outbox $outbox)
    {
        if($request->ajax()){
            try {
                $outbox->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $outboxes = Outbox::pagination();
            return view('Includes.AllOutboxes', compact('outboxes'))->render();
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    Outbox::findOrFail($id)->delete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $outboxes = Outbox::pagination();
            return view('Includes.AllOutboxes', compact('outboxes'))->render();
        }
    }

    public function trash(Request $request)
    {
        $outboxes = Outbox::onlyTrashed()->orderBy('created_at', 'desc')->paginate(8);

        if ($request->ajax()) {
            return view('Includes.AllOutboxesTrash', compact('outboxes'))->render();
        }

        return view('dashboard.messages.outbox.trash', compact('outboxes'));
    }

    public function forceDestroy(Request $request, $id)
    {
        if($request->ajax()){
            try {
                Outbox::onlyTrashed()->findOrFail($id)->forceDelete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $outboxes = Outbox::pagination("http://dashboard.dev/outbox-trash");
            return view('Includes.AllOutboxesTrash', compact('outboxes'))->render();
        }
    }

    public function forceMultiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    Outbox::onlyTrashed()->findOrFail($id)->forceDelete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $outboxes = Outbox::pagination("http://dashboard.dev/outbox-trash");
            return view('Includes.AllOutboxesTrash', compact('outboxes'))->render();
        }
    }

    public function restore(Request $request, $id)
    {
        $outbox = Outbox::onlyTrashed()->findOrFail($id);
        if($request->ajax()){
            try {
                if(count($outbox->inbox) !== 0){
                    $outbox->restore();
                }else{
                    /**
                     *      couldn't restore because it has no inbox
                     */
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $outboxes = Outbox::pagination("http://dashboard.dev/outbox-trash");
            return view('Includes.AllOutboxesTrash', compact('outboxes'))->render();
        }
    }
}
