@extends('layouts.admin.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Berita</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('admin/beritabuat')}}" class="btn btn-primary"><i class="fa "></i>Buat</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i>Berita</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Subjek</th>
                                <th>Isi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($informasi as $informasis)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $informasis->judul }}</td>
                                <td>{{ $informasis->subjek }}</td>
                                <td>{{ $informasis->informasi }}</td><td>
                                    <form action="{{ url('admin/beritaupdate')}}/{{$informasis->id}}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-table"></i>Update</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/berita') }}/{{ $informasis->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Anda yakin akan menghapus data ?');"><i
                                                class="fa fa-trash"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$informasi->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
