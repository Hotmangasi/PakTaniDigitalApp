@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Data Slide</div>
                            <a href="{{ route('slide.create') }}" class="btn btn-primary btn-sm ml-auto"><i
                                    class="fas fa-plus"></i> Tambah Slide</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('succes'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul Slide</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($slide as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->judul_slide }}</td>
                                            <td>{{ $row->deskripsi }}</td>
                                            <td>{{ $row->kategori }}</td>
                                            <td>{{ $row->link }}</td>
                                            <td>

                                                <img src="{{ asset('uploads/' . $row->gambar_slide) }}" alt=""
                                                    width="100">
                                            </td>

                                            <td>
                                                @if ($row->status == '1')
                                                    Active
                                                @else
                                                    Draft
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('slide.edit', $row->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i></a>
                                                <form action="{{ route('slide.destroy', $row->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
