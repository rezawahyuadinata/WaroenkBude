@extends('layouts.admin.layout')
@section('section')
<div class="card jumbotron">
    <div class="card-body">
        <h4><i class="fa fa-user"></i>Edit berita</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ route('admin.beritaupdate', $informasi->id ) }}">
            <div class="form-group">
                @csrf
                <label for="judul">Judul :</label>
                <input type="text" class="form-control" name="judul" value="{{ $informasi->judul }}" />
            </div>
            <div class="form-group">
                <label for="subjek">Subjek :</label>
                <input rows="5" columns="5" class="form-control" name="subjek" value="{{ $informasi->subjek }}">
            </div>
            <div class="form-group">
                <label for="informasi">Informasi :</label>
                <textarea rows="5" columns="5" class="form-control" name="informasi" value="">{{ $informasi->informasi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection
