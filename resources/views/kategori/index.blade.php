@extends('layouts.app', ['title' => 'Daftar Kategori'])

@section('content')
<div class="row">
  <div class="col-lg-12">
    @include('partials.alert')
    <div class="card px-3 py-3">
      <div class="d-flex flex-row-reverse my-2">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kategori_modal">
          Tambah Data
        </button>
      </div>
      <div class="table-responsive">
        <table class="table" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data_kategori as $kategori)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ str_limit($kategori->nama_kategori, 30, '...') }}</td>
              <td>
                <a href="{{ route('kategori.edit', $kategori->id_kategori) }}">
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                </a>
                <form action="{{ route('kategori.destroy', $kategori->id_kategori) }}" method="post">
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
@include('kategori.create')
@endpush

@push('js')
<script>
  $(document).ready(function() {
    $("#datatable").DataTable();
  });
</script>
@endpush