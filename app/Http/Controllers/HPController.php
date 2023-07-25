<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HPController extends Controller
{
    // トップページ
    public function index()
    {
        return view('hp.index');
    }

    //  menuページ
    public function menu()
    {
        return view('hp.menu.index');
    }

    // staffページ
    public function staff()
    {
        return view('hp.staff.index');
    }
}
