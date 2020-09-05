@extends('layouts.app', ['title' => $produk->nama_produk])

@section('content')
<div class="row">
  <div class="col-lg-9 col-md-8">
    <div class="card py-3 px-3">
      <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" value="{{ $produk->nama_produk }}" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
              <label for="id_kategori">Kategori</label>
              <select class="form-control" name="id_kategori" id="id_kategori">
                <option>Pilih kategori..</option>
                @foreach($data_kategori as $kategori)
                <option value="{{ $kategori->id_kategori }}" {{ $produk->kategori->nama_kategori === $kategori->nama_kategori ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number" value="{{ $produk->harga }}" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
              <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $produk->deskripsi }}</textarea>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form-group">
              <label for="gambar">Input gambar</label>
              <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
        </div>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
    </div>
  </div>

  <div class="col-lg-3 col-md-4">
    <img class="img-thumbnail img-fluid" src="{{ url('uploads/' . $produk->gambar) }}" width="200" alt="">
  </div>
</div>
@endsection