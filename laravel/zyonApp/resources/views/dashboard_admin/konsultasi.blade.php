@extends('dashboard-layout.index')

@section('container')

<div class="container-fluid">
  <form class="d-flex">
    <input class="form-control me-2" type="text" placeholder="Search" />
    <button class="btn btn-primary" type="button">Search</button>
  </form>
  
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="white-box">
        <div class="container">
          <h3 class="box-title">Riwayat Konsultasi</h3>
          <br />
        </div>
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">User</th>
                <th scope="col">Psikolog</th>
                <th scope="col">Status Konsultasi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Alpin</td>
                <td>Dzaki</td>
                <td>Belum Konsultasi</td>
                <td>
                  <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</div>
                  
                </td>
              </tr>
              
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection