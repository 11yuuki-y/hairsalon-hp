<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\index;

class indexController extends Controller
{
    // トップページ
    public function index()
    {
        return view('hp.index');
    }

    //  menuページ
    public function menu()
    {
        return view('hp.menu');
    }

    // staffページ
    public function staff()
    {
        return view('hp.staff');
    }
}