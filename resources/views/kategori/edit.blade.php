@extends('components.master')

@section('title', 'Edit Data Kategori')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <form action="/kategori/{{ $kategori->id }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="kode">Kode</label>
                                <input type="text" name="kode" id="kode" class="form-control"
                                    placeholder="Isikan kode" value="{{ $kategori->kode }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Kategori</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Isikan nama kategori" value="{{ $kategori->name }}">
                            </div>
                            <button class="btn btn-sm btn-warning" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
