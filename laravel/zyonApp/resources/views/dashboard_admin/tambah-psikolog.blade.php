@extends('dashboard-layout.index')

@section('container')

<div class="container-fluid"> 
  <div class="row">
    <div class="col-md-12">
      <div class="white-box">
        <div class="container">
          <h3 class="box-title">Input Psikolog</h3>
          <br />
        </div>
        <div class="container">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Psikolog</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama Psikolog" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Fee</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Fee Psikolog" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Psikolog</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Deskripsi Psikolog"></textarea>
          </div>
          <div class="text-center">
            <br />
            <br />
            <button type="button" class="btn btn-primary">Submit Data</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection