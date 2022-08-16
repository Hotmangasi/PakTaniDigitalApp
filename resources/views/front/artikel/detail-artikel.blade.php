@extends('front.layouts.frontend')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mt-4">
                <div class="div ml-4">
                    <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" style="width: 103.5vh; height: 60vh;"
                        class="img-fluid">
                </div>
                <div class="detail-content mt-2 p-4">
                    <div class="detail-badge">
                        <a href="" class="badge badge-warning">{{ $artikel->kategori->nama_kategori }}</a>
                        <a href="" class="badge badge-primary">{{ $artikel->users->name }}</a>
                    </div>
                    <h2>{{ $artikel->judul }}</h2>
                    <div class="detail-body">
                        <p>{!! $artikel->body !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4">
                <div class="detail-sidebar-iklan">
                    <h4>{{ $iklanA->judul }}</h4>
                    <hr>
                    <a href="{{ $iklanA->link }}">
                        <img src="{{ asset('uploads/' . $iklanA->gambar_iklan) }}" width="350">
                    </a>
                </div>

                <div class="detail-sidebar-kategori">
                    <h4>Kategori </h4>
                    <hr>
                    @foreach ($kategori as $row)
                        <div class="sidebar-kategori d-flex flex-wrap">
                            <a href="{{ route('kategori-front', $row->slug) }}" style="text-decoration: none;">
                                <p>{{ $row->nama_kategori }}</p>
                            </a>
                            <p class="ml-auto text-right"><span class="badge badge-dark">{{ $row->artikel->count() }}</span>
                            </p>
                        </div>
                    @endforeach


                    <div class="detail-sidebar-artikel">
                        <h4 class="mt-4">Artikel Terbaru</h4>
                        <hr>
                        @foreach ($postinganTerbaru as $row)
                            <a href="{{ route('detail-artikel', $row->slug) }}" class="text-dark media mt-3">
                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" width="70px" class="mr-3"
                                    alt="...">
                                <div class="media-body">
                                    <h6 class="mt-0">{{ $row->judul }}</h6>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
