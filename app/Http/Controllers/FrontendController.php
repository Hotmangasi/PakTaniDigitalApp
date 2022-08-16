<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use App\Models\Slide;
use App\Models\Kategori;
use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::orderBy('created_at', 'DESC')->paginate(3);
        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit(3)->get();
        $iklan = Iklan::all();
        $slide = Slide::all();
        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'postinganTerbaru' => $postinganTerbaru,
            'slide' => $slide,
            'iklan' => $iklan
        ]);
    }

    public function detail($slug)
    {
        $kategori = Kategori::all();
        $artikel = Artikel::where('slug', $slug)->first();
        $iklanA = Iklan::where('id', '1')->first();
        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit(5)->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru

        ]);
    }

    public function kategori($slug)
    {
        $kategori = Kategori::all();
        $kategoriPage = Kategori::where('slug', $slug)->firstOrFail();
        $artikelKategori = Artikel::where('kategori_id', $kategoriPage->id)->orderBy('created_at', 'desc');
        $artikel = $artikelKategori->paginate(1);
        $postinganTerbaru = $artikelKategori->limit(3)->get();
        $iklan = Iklan::where('id', '1')->first();
        return view('front.kategori.kategori-artikel', [
            'kategori' => $kategori,
            'kategoriPage' => $kategoriPage,
            'artikel' => $artikel,
            'postinganTerbaru' => $postinganTerbaru,
            'iklan' => $iklan
        ]);
    }
}
