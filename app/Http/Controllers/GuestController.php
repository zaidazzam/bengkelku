<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){

        return view('guest_view.home');

    }
    public function harga(){
        return view('guest_view.harga');

    }
    public function contact(){

        return view('guest_view.kontak');

    }
    public function artikelTips(){
        $artikel = Blog::all();
        return view('guest_view.blog', compact('artikel'));
    }
    public function artikelDetail($id){
        $artikel = Blog::find($id);
        if (!$artikel) {
            abort(404);
        }
        return view ('guest_view.detail_blog',compact('artikel'));
    }
}
