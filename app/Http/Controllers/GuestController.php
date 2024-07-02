<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $artikel = Blog::all();
        return view('guest_view.home', compact('artikel'));

    }
    // public function harga(){
    //     return view('guest_view.harga');

    // }
    public function contact(){

        return view('guest_view.kontak');

    }
    public function artikelTips(){
        $artikel = Blog::all();
        return view('guest_view.blog', compact('artikel'));
    }


    public function sparepart(){
        $sparepart = Sparepart::all();
        return view('guest_view.harga', compact('sparepart'));
    }


    public function artikelDetail($id){
        $artikel = Blog::find($id);
        if (!$artikel) {
            abort(404);
        }
        return view ('guest_view.detail_blog',compact('artikel'));
    }
}
