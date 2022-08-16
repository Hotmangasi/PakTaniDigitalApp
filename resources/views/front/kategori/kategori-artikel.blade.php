@extends('front.layouts.frontend')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="col-sm-12">
                <div class="card" data-aos="fade-up">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="font-weight-600 mb-4">
                                    {{ $kategoriPage->nama_kategori }}
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                @foreach ($artikel as $row)
                                    {{-- @continue($row->id == $row->count() || $row->id == $row->count() - 1 || $row->id == $row->count() - 2) --}}
                                    <a href="{{ route('detail-artikel', $row->slug) }}" class="row text-dark">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="rotate-img">
                                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                                    style="width: 50vh; height: 22.5vh;" alt="banner" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-sm-8 grid-margin">
                                            <h2 class="font-weight-600 mb-2">
                                                {{ $row->judul }}
                                            </h2>
                                            <p class="fs-15">
                                                {!! Str::limit($row->body, 250) !!}
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                                <div class="col-12 d-flex justify-content-center">
                                    {!! $artikel->links() !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="mb-4 text-primary font-weight-600">
                                    Berita Terbaru
                                </h2>
                                @foreach ($postinganTerbaru as $row)
                                    <a href="{{ route('detail-artikel', $row->slug) }}" class="row text-dark">
                                        <div class="col-sm-12">
                                            <div class="border-bottom pb-4 pt-4">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <h5 class="font-weight-600 mb-1">
                                                            {{ $row->judul }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="rotate-img">
                                                            <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                                                style="height: 9.5vh; width: 13vh" alt="banner"
                                                                class="img-fluid" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <div class="card">
                                    <div class="card-body">
                                        <div class="detail-sidebar-iklan">
                                            <h4>{{ $iklan->judul }}</h4>
                                            <hr>
                                            <a href="{{ $iklan->link }}">
                                                <img src="{{ asset('uploads/' . $iklan->gambar_iklan) }}" width="350">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="trending">
                                    <h2 class="mb-4 text-primary font-weight-600">
                                        Trending
                                    </h2>
                                    <div class="mb-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_4.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                        <h3 class="mt-3 font-weight-600">
                                            Virus Kills Member Of Advising Iran’s Supreme
                                        </h3>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_5.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                        <h3 class="mt-3 font-weight-600">
                                            Virus Kills Member Of Advising Iran’s Supreme
                                        </h3>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="rotate-img">
                                            <img src="../assets/images/magazine/Magzine_6.jpg" alt="banner"
                                                class="img-fluid" />
                                        </div>
                                        <h3 class="mt-3 font-weight-600">
                                            Virus Kills Member Of Advising Iran’s Supreme
                                        </h3>
                                        <p class="fs-13 text-muted mb-0">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
