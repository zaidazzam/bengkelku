<?php

namespace App\Http\Controllers;

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
    public function artikel(){

        return view('guest_view.blog');
    }
}