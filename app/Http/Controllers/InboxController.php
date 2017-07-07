<?php

namespace App\Http\Controllers;

use App\Inbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $month = '';
//        $inboxes = Inbox::get(['created_at']);
//        foreach ($inboxes as $inbox){
//            switch ($inbox->created_at->format('m')){
//                case '01':
//                    $month = 'فروردین';
//                    break;
//                case '02':
//                    $month = 'اردیبهشت';
//                    break;
//                case '03':
//                    $month = 'خرداد';
//                    break;
//                case '04':
//                    $month = 'تیر';
//                    break;
//                case '05':
//                    $month = 'مرداد';
//                    break;
//                case '06':
//                    $month = 'شهریور';
//                    break;
//                case '07':
//                    $month = 'مهر';
//                    break;
//                case '08':
//                    $month = 'آبان';
//                    break;
//                case '09':
//                    $month = 'آذر';
//                    break;
//                case '10':
//                    $month = 'دی';
//                    break;
//                case '11':
//                    $month = 'بهمن';
//                    break;
//                case '12':
//                    $month = 'اسفند';
//                    break;
//            }
//            echo $inbox->created_at->format('y') . $month . '<br>';
//        }
//        $archives = Inbox::selectRaw('year(created_at) year, month(created_at) month, count(*) published')
//            ->groupBy('year', 'month')
//            ->orderByRaw('min(created_at) desc')
//            ->get();
//        foreach ($archives as $archive){
//            $month = Inbox::getMonthName($archive->month);
//            echo $archive->year . ' ' . $month . '<br>';
//        }
//
        $archives = DB::table('inboxes')->select('year(created_at) year', 'month(created_at) month', 'count(*) published')->get();
        $inboxes = Inbox::get(['created_at']);
        foreach ($inboxes as $inbox) {
            dd($inbox);
        }
//        if($request->has('query')){
//            $inboxes = Inbox::search($request->input('query'))->orderBy('created_at', 'desc')->paginate(8);
//        }else{
//            $inboxes = Inbox::orderBy('created_at', 'desc')->paginate(8);
//        }
//
//        if ($request->ajax()) {
//            return view('Includes.AllInboxes', compact('inboxes'))->render();
//        }
//
//        return view('dashboard.messages.inbox.index', compact('inboxes'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function show(Inbox $inbox)
    {
        $inbox->seen = 1;
        $inbox->seen_by = Auth::user()->id;
        $inbox->save();
        return view('dashboard.messages.inbox.show', compact('inbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Inbox $inbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inbox $inbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inbox  $inbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Inbox $inbox)
    {
        if($request->ajax()){
            try {
                foreach($inbox->outboxes as $outbox){
                    $outbox->delete();
                }
                $inbox->updated_by = Auth::user()->id;
                $inbox->save();
                $inbox->delete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $inboxes = Inbox::pagination();
            return view('Includes.AllInboxes', compact('inboxes'))->render();
        }
    }

    public function multiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $deleteInbox = Inbox::findOrFail($id);
                    foreach($deleteInbox->outboxes as $outbox){
                        $outbox->delete();
                    }
                    $deleteInbox->updated_by = Auth::user()->id;
                    $deleteInbox->save();
                    $deleteInbox->delete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $inboxes = Inbox::pagination();
            return view('Includes.AllInboxes', compact('inboxes'))->render();
        }
    }

    public function trash(Request $request)
    {
        $inboxes = Inbox::onlyTrashed()->orderBy('created_at', 'desc')->paginate(8);

        if ($request->ajax()) {
            return view('Includes.AllInboxesTrash', compact('inboxes'))->render();
        }

        return view('dashboard.messages.inbox.trash', compact('inboxes'));
    }

    public function forceDestroy(Request $request, $id)
    {
        $inbox = Inbox::onlyTrashed()->findOrFail($id);
        if($request->ajax()){
            try {
                foreach($inbox->outboxes as $outbox){
                    $outbox->forceDelete();
                }
                $inbox->forceDelete();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $inboxes = Inbox::pagination("http://dashboard.dev/inbox-trash");
            return view('Includes.AllInboxesTrash', compact('inboxes'))->render();
        }
    }

    public function forceMultiDestroy(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();
            $ids = explode(',', $input['ids']);
            try {
                foreach ($ids as $id){
                    $deleteInbox = Inbox::onlyTrashed()->findOrFail($id);
                    foreach($deleteInbox->outboxes as $outbox){
                        $outbox->forceDelete();
                    }
                    $deleteInbox->forceDelete();
                }
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $inboxes = Inbox::pagination("http://dashboard.dev/inbox-trash");
            return view('Includes.AllInboxesTrash', compact('inboxes'))->render();
        }
    }

    public function restore(Request $request, $id)
    {
        $inbox = Inbox::onlyTrashed()->findOrFail($id);
        if($request->ajax()){
            try {
                foreach($inbox->outboxes as $outbox){
                    $outbox->restore();
                }
                $inbox->updated_by = Auth::user()->id;
                $inbox->save();
                $inbox->restore();
            }catch (\Exception $exception){
                dd($exception->getMessage());
            }

            $inboxes = Inbox::pagination("http://dashboard.dev/inbox-trash");
            return view('Includes.AllInboxesTrash', compact('inboxes'))->render();
        }
    }
}
