<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Kategori;
use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $category = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();
        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }
}
