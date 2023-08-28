<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\StyleGallery;
use App\Models\Concept;

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
    

    // 編集ボタンを押した際にadmin stylegalleryページから表示したと判別する為のURL
    public function stylegallerystore(Request $request)
    {
        // ディレクトリ名
        $dir = 'stylegallery';

        // アップロードされたファイル名を取得
        $file_name = $request->file('img')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('img')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBで保存
        $stylegallery = new StyleGallery();
        $stylegallery->name = $file_name;
        $stylegallery->path = 'storage/' . $dir . '/' . $file_name;
        $stylegallery->save();

        return redirect('/admin/stylegallery');
    }

    // 編集ボタンを押した際にadmin conceptページから表示したと判別する為のURL
    public function conceptstore(Request $request)
    {
        // ディレクトリ名
        $dir = 'concept';

        // アップロードされたファイル名を取得
        $file_name = $request->file('img')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('img')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBで保存
        $concept = new Concept();
        $concept->name = $file_name;
        $concept->path = 'storage/' . $dir . '/' . $file_name;
        $concept->save();

        return redirect('/admin/concept');
    }
}