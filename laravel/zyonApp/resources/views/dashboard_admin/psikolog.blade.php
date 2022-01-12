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
        <h3 class="box-title">All Psikolog</h3>
        
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
            <tr>
              <td>1</td>
              <td>Jacob</td>
              <td>Rp. 10000000</td>
              <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              <td>
                <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</div>
                <div class="btn btn-danger">Delete</div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jacob</td>
              <td>Rp. 10000000</td>
              <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              <td>
                <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</div>
                <div class="btn btn-danger">Delete</div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Jacob</td>
              <td>Rp. 10000000</td>
              <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
              <td>
                <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</div>
                <div class="btn btn-danger">Delete</div>
              </td>
            </tr>
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
          <form action="">
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Psikolog</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama psikolog" />
            </div>
            
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Fee</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Fee" />
            </div>
            
            <div class="mb-3">
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskprisi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Deskripsi"></textarea>
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