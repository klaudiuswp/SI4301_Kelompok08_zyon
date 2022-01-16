@extends('dashboard-layout.index')

@section('container')

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses!</strong> {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container-fluid"> 
  <div class="row">
    <div class="col-md-12">
      <div class="white-box"> 
        <div class="container">
          <h3 class="box-title">Tambah Psikolog</h3>
          <br />
        </div>
        <div class="container">
          <form action="{{ route('tambah-psikolog') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nama Psikolog</label>
              <input name="nama" type="type" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Psikolog" />
            </div>
            <div class="mb-3">
              <label class="form-label">Fee</label>
              <input name="fee" type="number" class="form-control @error('fee') is-invalid @enderror" placeholder="Masukkan Fee Psikolog" />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Psikolog</label>
              <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi Psikolog"></textarea>
            </div>
            <input class=" @error('foto_psikolog') is-invalid @enderror" type="file" name="foto_psikolog">
            <div class="text-center">
              <br />
              <br />
              <button type="submit" class="btn btn-primary">Tambah Psikolog</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection