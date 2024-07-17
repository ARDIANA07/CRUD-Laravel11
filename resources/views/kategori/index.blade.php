@extends('components.master')

@section('title', 'kategori')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
            </div>
            <div class="section-body">
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>{{ $title2 }}</h4>
                    <div class="card-header-form">
                        <button class="btn btn-sm btn-success" type="button" data-target="#modal-tambah"
                            data-toggle="modal">Tambah Data</button>
                    </div>
                </div>
                <div class="py-3 card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th style="width: 10%">No</th>
                                <th>Kode</th>
                                <th>Name</th>
                                <th style="width: 15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategories as $ktg)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ktg->kode }}</td>
                                    <td>{{ $ktg->name }}</td>
                                    <td>
                                        <a href="/kategori/{{ $ktg->id }}/edit" class="btn btn-sm btn-warning"><i
                                                class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    @include('kategori.form')
@endsection
