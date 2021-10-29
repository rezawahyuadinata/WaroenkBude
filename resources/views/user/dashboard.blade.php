@extends('layouts.user.layout')
@section('section')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 xl-6 sm-col-6">
            <nav class="col-md-12 sm-col-12">
                <div class="panel panel-scrolling">
                    <div class="panel-heading">
                        <h3 class="panel-title">Berita</h3>
                    </div>
                </div>
            </nav>
            @foreach ($informasi as $item)
            <div class="list-group col-md-12 container">
                <div class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">{{$item->judul}}</h6>
                            <p class="mb-0 opacity-75">{{$item->informasi}}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
