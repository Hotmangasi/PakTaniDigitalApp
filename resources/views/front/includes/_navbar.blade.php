<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-bottom py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="navbar-brand" href="#"><img src="{{ asset('front/images/logo.png') }}"
                                style="width: 3em" alt="" /></a>
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach ($kategori as $kat)
                                            <a class="dropdown-item"
                                                href="{{ route('kategori-front', $kat->slug) }}">{{ $kat->nama_kategori }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Tentang</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="https://www.instagram.com/paktanidigital/" target="_blank">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
