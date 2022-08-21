@extends('layouts.default')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col col-lg-4 col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning">{{ $error }}</div>
                            @endforeach
                        @endif
                        <!-- image kategori -->
                        {{-- @if ($itemprofil->foto != null)
                            <img src="{{ Storage::url($itemprofil->foto) }}" alt="profil" width='150px'
                                class="img-thumbnail mb-2">
                            <br>
                            <form action="{{ url('/admin/imageProfil/profil') }}" method="post" style="display:inline;">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-danger mb-2">
                                    Hapus
                                </button>
                            </form>
                        @else
                            <form action="{{ url('/admin/imageProfil') }}" method="post" enctype="multipart/form-data"
                                class="form-inline">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="image" id="image">
                                    <input type="hidden" name="profil_id" value={{ $itemprofil->id }}>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        @endif --}}
                        <hr>

                        <form action="{{ route('user.update', Auth::user()->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="foto" class="text-white">Foto Profil</label>
                                <input type="file" name="foto" class="form-control">
                                <br>
                                <label for="foto">Gambar Saat ini</label><br>
                                <img src="{{ asset('uploads/' . $user->foto) }}" alt="" width="100">
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-white">Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-white">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    value="{{ $user->email }}">
                            </div>
                            {{-- <div class="form-group">
                                <label for="phone">Alamat</label>
                                <input type="text" name="alamat" id="phone" class="form-control"
                                    value="{{ Auth::user()->alamat }}">
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
