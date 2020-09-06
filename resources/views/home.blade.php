@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pengguna</h4>
        </div>
        <div class="card-body">
          {{ count($users) }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="fas fa-sitemap"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Produk</h4>
        </div>
        <div class="card-body">
          {{ count($products) }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-7 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Produk Terbaru</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled list-unstyled-border">
          @foreach($latest_products as $product)
          <li class="media">
            <img class="mr-3 rounded-circle" width="50" src="{{ url('uploads/' . $product->gambar) }}" alt="{{ $product->nama_produk }}">
            <div class="media-body">
              <div class="float-right text-primary">{{ date_format(date_create($product->created_at), 'd-M-Y') }}</div>
              <div class="media-title">{{ $product->nama_produk }}</div>
              <span class="text-small text-muted">{{ $product->deskripsi }}</span>
            </div>
          </li>
          @endforeach
        </ul>
        <div class="text-center pt-1 pb-1">
          <a href="{{ route('produk.index') }}" class="btn btn-primary btn-lg btn-round">
            Lihat semua
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Produk Termahal</h4>
      </div>
      <div class="card-body">
        <div class="summary">
          @foreach($expensive_products as $product)
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              <img class="mr-3 rounded" width="50" src="{{ url('uploads/' . $product->gambar) }}" alt="product">
              <div class="media-body">
                <div class="media-right">Rp{{ number_format($product->harga, 2, ',', '.') }}</div>
                <div class="media-title">{{ $product->nama_produk }}</div>
                <div class="text-muted text-small">kategori <a href="">{{ $product->kategori->nama_kategori }}</a></div>
              </div>
            </li>
          </ul>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection