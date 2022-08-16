<div class="col-xl-8 stretch-card grid-margin">
    <div class="position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $key => $row)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <a href="http://{{ $row->link }}">
                            <img src="{{ asset('uploads/' . $row->gambar_slide) }}" class="d-block"
                                style="width: 125vh; height: 65vh;" alt="...">
                            <div class="banner-content">
                                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                    {{ $row->kategori }}
                                </div>
                                <h1 class="mb-0">{{ $row->judul_slide }}</h1>
                                <h1 class="mb-2">
                                    {{ $row->deskripsi }}
                                </h1>
                            </div>
                        </a>
                    </div>
                @endforeach

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
