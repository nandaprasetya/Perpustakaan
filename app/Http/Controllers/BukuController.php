<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Buku::all();
        return view('buku.buku')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Buku();
        $this->creup($request,$item,'post');
        return redirect(route('buku.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function creup(Request $request,$item,$pagetype){
        \Validator::make($request->all(),[
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'cover' => 'required | image | mimes:jpeg,png,jpg,gif',
            'deskripsi' => 'required',
            'halaman' => 'required'
        ])->setAttributeNames([
            'judul' => 'Judul',
            'penulis' => 'Penulis',
            'penerbit' => 'Penerbit',
            'cover' => 'Cover',
            'deskripsi' => 'Deskripsi',
            'halaman' => 'Halaman'
        ])->validate();
        
        if($request->file('cover')){
            $cover = $request->file('cover');
            $filename = uniqid().'.'.$cover->getClientOriginalExtension();
            $path = $cover->storeAs('public/storages', $filename);

            $item->cover = $filename;
        }

        $lastid = Buku::max('id_buku');
        $nextid = $lastid ? 'bk'.(intval(substr($lastid,2)) + 1) : 'bk1';
        $item->id_buku = $nextid;
        $item->judul = $request->judul;
        $item->penulis = $request->penulis;
        $item->penerbit = $request->penerbit;
        $item->tahun_terbit = $request->tahun_terbit;
        $item->deskripsi = $request->deskripsi;
        $item->halaman = $request->halaman;        

        $item->save();
    }
}
