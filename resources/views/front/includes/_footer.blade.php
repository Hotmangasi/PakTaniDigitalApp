<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h2>Tentang Pak Tani Digital</h2>
                    <h4 class="font-weight-normal mt-3 mb-5 text-justify">
                        Pak Tani Digital adalah sebuah “Startup Sosial Petani” yang bervisi memberdayakan petani
                        milenial Indonesia agar menjadi pelaku utama dalam Industri Pertanian berbasis Society 5.0 di
                        masa mendatang
                    </h4>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold mb-3">Kategori</h3>
                    @foreach ($kategori as $row)
                        <div class="footer-border-bottom pb-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 font-weight-600">
                                    <a href="{{ route('kategori-front', $row->slug) }}" class="text-white">
                                        {{ $row->nama_kategori }}</a>
                                </h5>
                                <div class="count">
                                    {{ $row->artikel->count() }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-4">
                    <div class="row ml-3">
                        <div class="col-sm-12">
                            <div class="footer-border-bottom pb-2">
                                <div class="row">
                                    <div class="col-1 social-media">
                                        <li>
                                            <a href="https://www.instagram.com/paktanidigital/">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-11">
                                        <a href="" class="text-white">
                                            @paktanidigital
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3">
                        <div class="col-sm-12">
                            <div class="footer-border-bottom pb-2 pt-2">
                                <div class="row">
                                    <div class="col-1 social-media">
                                        <li>
                                            <a href="#" cl>
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                    </div>
                                    <div class="col-11">
                                        <a href="" class="text-white">
                                            Pak Tani Digital
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 ml-3">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-1 social-media">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-11">
                                    <a href="" class="text-white">
                                        Pak Tani Digital
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center align-items-center">
                        <div class="fs-16 font-weight-600">
                            © 2022 @ <a href="mailto:paktanidigital@gmail.com" target="_blank" class="text-white">
                                Pak Tani Digital</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
