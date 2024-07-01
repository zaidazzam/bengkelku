<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'image' => 'image|mimes:svg,jpeg,png,jpg,gif|max:5000', // Example validation rule for image uploads
        ]);
        $rekomendasi = new Blog([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gambarartikel', 'public');
            $rekomendasi->image = $imagePath;
        }
        $rekomendasi->save();
        return redirect('/home/artikel')->with('success', 'Artikel saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'image' => 'image|mimes:svg,jpeg,png,jpg,gif|max:5000', // Example validation rule for image uploads
        ]);

        // Ambil blog yang ingin diupdate
        $rekomendasi = Blog::findOrFail($id);

        // Update data blog
        $rekomendasi->judul = $request->judul;
        $rekomendasi->deskripsi = $request->deskripsi;
        $rekomendasi->kategori = $request->kategori;

        // Jika ada file gambar baru diupload, update path gambarnya
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gambarartikel', 'public');
            $rekomendasi->image = $imagePath;
        }

        // Simpan perubahan
        $rekomendasi->save();

        return redirect('/home/artikel')->with('success', 'Artikel updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $artikel)
    {
        $artikel->delete();
        return redirect('/home/artikel')->with('success', 'artikel/tips deleted!');
    }
}
