<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Comment;
use App\Inbox;
use App\Post;
use App\User;
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
        $input = $request->all();
        $from = str_replace('/', '-', $input['from']) . ' 00:00:00';
        $till = str_replace('/', '-', $input['till']) . ' 23:59:59';
        $posts = Post::whereBetween('created_at', [$from, $till])->get()->toArray();

        return Excel::create('All_Post', function($excel) use ($posts) {
            $excel->sheet('mySheet', function($sheet) use ($posts)
            {
                $sheet->fromArray($posts);
            });
        })->export($input['type']);
    }

    public function inbox(Request $request)
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
        $input = $request->all();
        $from = str_replace('/', '-', $input['from']) . ' 00:00:00';
        $till = str_replace('/', '-', $input['till']) . ' 23:59:59';
        $users = User::whereBetween('created_at', [$from, $till])->get()->toArray();

        return Excel::create('All_Users', function($excel) use ($users) {
            $excel->sheet('mySheet', function($sheet) use ($users)
            {
                $sheet->fromArray($users);
            });
        })->export($input['type']);
    }

    public function comments(Request $request)
    {
        $input = $request->all();
        $from = str_replace('/', '-', $input['from']) . ' 00:00:00';
        $till = str_replace('/', '-', $input['till']) . ' 23:59:59';
        $comments = Comment::whereBetween('created_at', [$from, $till])->get()->toArray();

        return Excel::create('All_comments', function($excel) use ($comments) {
            $excel->sheet('mySheet', function($sheet) use ($comments)
            {
                $sheet->fromArray($comments);
            });
        })->export($input['type']);

    }

    public function admins(Request $request)
    {
        $input = $request->all();
        $from = str_replace('/', '-', $input['from']) . ' 00:00:00';
        $till = str_replace('/', '-', $input['till']) . ' 23:59:59';
        $admins = Admin::whereBetween('created_at', [$from, $till])->get()->toArray();

        return Excel::create('All_Admins', function($excel) use ($admins) {
            $excel->sheet('mySheet', function($sheet) use ($admins)
            {
                $sheet->fromArray($admins);
            });
        })->export($input['type']);
    }
}
