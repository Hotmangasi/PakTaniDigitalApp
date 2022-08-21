@extends('layouts.default')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col col-lg-4 col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center mb-3">
                            <img src="{{ asset('uploads/' . Auth::user()->foto) }}" width="100" alt="profil"
                                class="profile-user-img img-responsive img-circle img-thumbnail">
                        </div>
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                        <p class="text-center text-white"> Member sejak : {{ Auth::user()->created_at }}</p>
                        <hr>
                        {{-- <strong>
                            <i class="fas fa-map-marker mr-2"></i>
                            Alamat
                        </strong>
                        <p class="text-muted">
                            {{ Auth::user()->alamat }}
                        </p>
                        <hr> --}}
                        <strong>
                            <i class="fas fa-envelope mr-2"></i>
                            Email
                        </strong>
                        <p class="text-white">
                            {{ Auth::user()->email }}
                        </p>
                        <hr>
                        {{-- <strong>
                            <i class="fas fa-phone mr-2"></i>
                            No Tlp
                        </strong>
                        <p class="text-muted">
                            {{ Auth::user()->phone }}
                        </p>
                        <hr> --}}
                        <a href="{{ route('user.edit', Auth::user()->id) }}" class="btn btn-primary btn-block">Setting</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
