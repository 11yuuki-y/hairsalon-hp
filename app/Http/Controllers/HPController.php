<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concept;
use App\Models\StyleGallery;

class HpController extends Controller
{
    // トップページ
    public function index()
    {
        $concept = Concept::all();
        $stylegallery = StyleGallery::all();
        return view('hp.index', compact('concept', 'stylegallery'));
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
