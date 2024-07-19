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
                    <table class="table table-stripped" id="table">
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
                                        <form action="/kategori/{{ $ktg->id }}" id="delete-form{{ $ktg->id }}">
                                            @method('delete')
                                            <a href="/kategori/{{ $ktg->id }}/edit" class="btn btn-sm btn-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <button class="btn btn-sm btn-danger"
                                                onclick="confirmDelete('delete-form{{ $ktg->id }}')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
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

@push('script')
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });

        function confirmDelete(formId) {
            event.preventDefault()
            swal({
                    title: "Apakah anda yakin?",
                    text: "ketika anda menekan ok maka data anda akan dihapus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                })
                .then((willdelete) => {
                    if (willdelete) {
                        document.getElementById(formId).submit();
                    }
                })
        }
    </script>
@endpush
