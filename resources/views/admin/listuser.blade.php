@extends('layouts.admin.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
    </ol>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Daftar Pengguna</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pelanggan as $user)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->jenis_kelamin }}</td>
                                <td>{{ $user->nomor }}</td>
                                <td>
                                <form action="{{ url('admin/pelanggan') }}/{{ $user->id }}" method="post">
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
                    {{$pelanggan->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
