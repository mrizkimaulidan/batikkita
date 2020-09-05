@extends('layouts.app', ['title' => $kategori->nama_kategori])

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card py-3 px-3">
      <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" value="{{ $kategori->nama_kategori }}" name="nama_kategori" class="form-control" id="nama_kategori" aria-describedby="emailHelp">
            </div>
          </div>
        </div>
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
    </div>
  </div>
</div>
@endsection