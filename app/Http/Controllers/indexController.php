<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // トップページ
    public function index()
    {
        return view('hp.index');
    }
}
