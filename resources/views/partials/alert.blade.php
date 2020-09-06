@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil! <i class="fas fa-thumbs-up"></i></strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal!</strong> {{ $error }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endforeach
@endif