@extends('layouts.default')

@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    {{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">User</p>
                                    <h4 class="card-title">{{ $user->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="far fa-newspaper"></i>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Artikel</p>
                                    <h4 class="card-title">{{ $artikel->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-tags"></i>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Kategori</p>
                                    <h4 class="card-title">{{ $kategori->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="fas fa-file-video"></i>

                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Video</p>
                                    <h4 class="card-title">{{ $video->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Draft Artikel</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-sm-1">
                                    ID
                                </div>
                                <div class="col-sm-2">
                                    Nama Artikel
                                </div>
                                <div class="col-sm-2">
                                    Slug
                                </div>
                                <div class="col-sm-2">
                                    Kategori
                                </div>
                                <div class="col-sm-2">
                                    Author
                                </div>
                                <div class="col-sm-3">
                                    Gambar
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            @foreach ($artikel as $row)
                                {{-- @continue($row->id == $row->count() || $row->id == $row->count() - 1 || $row->id == $row->count() - 2) --}}
                                <a href="{{ route('artikel.edit', $row->id) }}" class="row text-dark">
                                    <div class="col-sm-1">
                                        {{ $row->id }}
                                    </div>
                                    <div class="col-sm-2">
                                        {{ $row->judul }}
                                    </div>
                                    <div class="col-sm-2">
                                        {{ $row->slug }}
                                    </div>
                                    <div class="col-sm-2">
                                        {{ $row->kategori->nama_kategori }}
                                    </div>
                                    <div class="col-sm-2">
                                        {{ $row->author }}
                                    </div>
                                    <div class="col-sm-3">
                                        <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" alt=""
                                            width="100">
                                    </div>
                                </a>
                            @endforeach
                            <div class="col-12 d-flex justify-content-center">
                                {!! $artikel->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Artikel Terpopuler</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					
					</div>

				</div>
			</div>
		</div>
	</div> --}}
    </div>
@endsection
