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
    public function registration(Request $request)
    {
        /*
        確認
        dd($request->url);
        */
        
        /*
        compact関数使用の場合
        $url = $request->url;
        return view('admin.registration.index', compact('url'));
        */

        // array関数
        return view('admin.registration.index', ['url' => $request->url]);
    }

    // // 編集ボタンを押した際にadmin headerページから表示したと判別する為のURL
    public function headerstore() 
    {

    }

    // // 編集ボタンを押した際にadmin stylegalleryページから表示したと判別する為のURL
    public function stylegallerystore()
    {

    }

    // // 編集ボタンを押した際にadmin conceptページから表示したと判別する為のURL
    public function conceptstore()
    {

    }
}