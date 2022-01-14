@extends('dashboard-layout.index')

@section('container')
<header class="d-flex py-3 bg-white shadow-sm border-top mb-4">
  <div class="container">
      <h2 class="h4 font-weight-bold px-4 pt-2">
          <b>Dashboard</b>
      </h2>
  </div>
</header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color: #04293A; border-radius: 15px">
                    <div class="card-body">
                        <h3 class="card-title text-white"><b>366</b></h3>
                        <p class="card-text text-white">Total User</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #064663; border-radius: 15px">
                    <div class="card-body">
                        <h3 class="card-title text-white"><b>345</b></h3>
                        <p class="card-text text-white">Total Psikolog</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #3E2C41; border-radius: 15px">
                    <div class="card-body">
                        <h3 class="card-title text-white"><b>345</b></h3>
                        <p class="card-text text-white">Total Konsultasi</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #5C527F; border-radius: 15px;">
                    <div class="card-body">
                        <h3 class="card-title text-white"><b>Rp 1.000.000</b></h3>
                        <p class="card-text text-white">Total Pemasukan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
