<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $kategories = \App\Models\Category::all();
        return view('kategori.index', [
            'title' => 'Kategori',
            'title2' => 'Daftar Kategori'
        ], compact('kategories'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect('kategori')->with('sukses', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $kategori = Category::find($id);
        return view('kategori.edit', [
            'title' => 'Edit Data Kategori'
        ], compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Category::find($id);

        $kategori->kode = $request->kode;
        $kategori->name = $request->name;
        $kategori->update();

        return redirect('kategori')->with('sukses', 'Data Berhasil diupdate');
    }

    public function destroy($id)
    {
        $kategori = Category::find($id);
        $kategori->delete();

        return redirect('kategori')->with('sukses', 'Data Berhasil dihapus');
    }
}