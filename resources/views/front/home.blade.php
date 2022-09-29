@extends('front.layouts.frontend')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row" data-aos="fade-up">

                @include('front.includes.slide')

                <div class="col-xl-4 stretch-card grid-margin">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h2>Berita Terbaru</h2>

                            @foreach ($postinganTerbaru as $row)
                                <a href="{{ route('detail-artikel', $row->slug) }}"
                                    class="d-flex text-white border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                    <div class="pr-3">
                                        <h5>{{ $row->judul }}</h5>
                                    </div>
                                    <div class="rotate-img">
                                        <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                            style="height: 8vh; width: 11vh" alt="thumb" class="img-fluid img-lg" />
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-9 stretch-card grid-margin">
                    <div class="row">
                        @foreach ($artikel as $row)
                            {{-- @continue($row->id == $row->count() || $row->id == $row->count() - 1 || $row->id == $row->count() - 2) --}}
                            <div class="col-md-4 card">
                                <a href="{{ route('detail-artikel', $row->slug) }}" class="text-dark">
                                <div class="card-body px-0">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" alt="thumb"
                                                class="img-fluid w-100" style="height: 25vh" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span
                                                class="badge badge-danger font-weight-bold">{{ $row->kategori->nama_kategori }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="mb-2 font-weight-600">
                                            {{ $row->judul }}
                                        </h2>
                                        <p class="mb-0 text-justify">
                                            {!! Str::limit($row->body, 150) !!}
                                        </p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach

                        <div class="col-12 d-flex justify-content-center">
                            {!! $artikel->links() !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($iklan as $row)
                                <h2>{{ $row->judul }}</h2>
                                <img src="{{ asset('uploads/' . $row->gambar_iklan) }}" alt="">
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
