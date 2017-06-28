<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.backup.backup');
    }

    public function posts(Request $request, $type)
    {
        //
    }

    public function inboxes(Request $request, $type)
    {
        //
    }

    public function users(Request $request, $type)
    {
        //
    }

    public function comments(Request $request, $type)
    {
        //
    }

    public function admins(Request $request, $type)
    {
        //
    }
}
