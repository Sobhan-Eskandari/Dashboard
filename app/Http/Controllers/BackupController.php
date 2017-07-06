<?php

namespace App\Http\Controllers;

use App\Inbox;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.backup.index');
    }

    public function posts(Request $request)
    {
        //
    }

    public function inboxes(Request $request)
    {
        $input = $request->all();
        $from = str_replace('/', '-', $input['from']) . ' 00:00:00';
        $till = str_replace('/', '-', $input['till']) . ' 23:59:59';
        $inboxes = Inbox::whereBetween('created_at', [$from, $till])->get()->toArray();

        return Excel::create('All_Inbox_Messages', function($excel) use ($inboxes) {
            $excel->sheet('mySheet', function($sheet) use ($inboxes)
            {
                $sheet->fromArray($inboxes);
            });
        })->export($input['type']);
    }

    public function users(Request $request)
    {
        //
    }

    public function comments(Request $request)
    {
        //
    }

    public function admins(Request $request)
    {
        //
    }
}
