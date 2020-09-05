<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" id="nama_produk" aria-describedby="emailHelp">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select class="form-control" name="id_kategori" id="id_kategori">
                  <option selected>Pilih kategori..</option>
                  @foreach($data_kategori as $kategori)
                  <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="gambar">Input gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>