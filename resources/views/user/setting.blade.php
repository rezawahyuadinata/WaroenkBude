@extends('layouts.user.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
    </ol>
</nav>
<div class="card jumbotron">
    <div class="card-body">
        <h4><i class="fa fa-user"></i>Profile saya</h4>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td>: </td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: </td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: </td>
                    <td>{{$user->alamat}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: </td>
                    <td>{{$user->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>: </td>
                    <td>{{$user->nomor}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="card jumbotron">
    <div class="card-body">
        <h4><i class="fa fa-user"></i>Edit Profile</h4>
        <form action="" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $user->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Email :</label>
                <div class="col-md-6">
                    <input id="email" type="email" placeholder="Masukkan Email Anda...."
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $user->email }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Alamat :</label>
                <div class="col-md-6">
                    <textarea id="alamat" type="text" placeholder="Masukkan alamat anda...."
                        class="form-control @error('alamat') is-invalid @enderror" name="alamat" required
                        autocomplete="alamat">{{ $user->alamat }}</textarea>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nomor :</label>
                <div class="col-md-6">
                    <input id="nomor" type="text" placeholder="Masukkan nomor anda...."
                        class="form-control @error('nomor') is-invalid @enderror" name="nomor"
                        value="{{ $user->nomor }}" required autocomplete="nomor">
                    @error('nomor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password :</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm"
                    class="col-md-4 col-form-label text-md-right">Konfirmasi Password :</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
