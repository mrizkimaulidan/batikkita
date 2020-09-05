@extends('layouts.app', ['title' => 'Daftar Produk'])

@section('content')
<div class="row">
  <div class="col-lg-12">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil! <i class="fas fa-thumbs-up"></i></strong> {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="card px-3 py-3">
      <div class="d-flex flex-row-reverse my-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>
      </div>
      <div class="table-responsive">
        <table class="table" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Produk</th>
              <th>Deskripsi</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data_produk as $produk)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $produk->nama_produk }}</td>
              <td>{{ str_limit($produk->deskripsi, 30, '...') }}</td>
              <td class="badge badge-pill badge-warning mt-1">{{ $produk->kategori->nama_kategori }}</td>
              <td>{{ $produk->harga }}</td>
              <td><img class="img-thumbnail" width="80" src="{{ url('uploads/' . $produk->gambar) }}" alt="product"></td>
              <td>
                <a href="{{ route('produk.edit', $produk->id_produk) }}">
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                </a>
                <form action="{{ route('produk.destroy', $produk->id_produk) }}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  @csrf
                  <button class="btn btn-danger btn-sm mt-2"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('modal')
@include('produk.create')
@endpush