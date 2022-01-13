@extends('dashboard-layout.index')

@section('container')

<div class="container-fluid">      
  <form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Search" />
    <button class="btn btn-primary" type="button">Search</button>
  </form>
  <br />
  <div class="row">
    <div class="col-md-12">
      <div class="white-box">
        <div class="box-title">

        <div class="d-flex justify-content-start">
          <h3>All Psikolog</h3>
        </div>
        <div class="d-flex justify-content-end">
          <a class="btn btn-primary" href="/tambah-psikolog">Tambah</a>
        </div>
        
        </div>
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Psikolog</th>
              <th scope="col">Fee</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($psikologs as $psikolog)
              <tr>
                <td>{{ $psikolog->id }}</td>
                <td>{{ $psikolog->nama }}</td>
                <td>{{ $psikolog->fee }}</td>
                <td>{{ $psikolog->deskripsi }}</td>
                <td>
                  <form action="">
                    @csrf
                  <button type="button" class="btn btn-primary d-inline" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</button>
                  
                  <button type="submit" class="btn btn-danger d-inline" onclick="return confirm('Yakin hapus psikolog')">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
            
          </tbody>
        </table>
        
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Psikolog</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
              <label class="form-label">Nama Psikolog</label>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama psikolog" />
            </div>
            
            <div class="mb-3">
              <label class="form-label">Fee</label>
              <input type="text" name="fee" class="form-control" placeholder="Fee" />
            </div>
            
            <div class="mb-3">
              <div class="mb-3">
                <label class="form-label">Deskprisi</label>
                <textarea name="deskripsi" class="form-control" rows="2" placeholder="Deskripsi"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection