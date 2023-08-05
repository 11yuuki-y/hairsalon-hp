<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // adminトップページ
    public function index()
    {
        return view('admin.index');
    }

    // admin headerページ
    public function header()
    {
        return view('admin.header.index');
    }

    // admin stylegalleryページ
    public function stylegallery()
    {
        return view('admin.stylegallery.index');
    }

    // admin conceptページ
    public function concept()
    {
        return view('admin.concept.index');
    }

    // admin画像登録ページ
    public function registration()
    {
        return view('admin.registration.index');
    }
}