@extends('dashboard-layout.index')

@section('container')

<br>
<div class="container mt-2">
    <h3><b>Pilih Psikolog</b></h3>
</div>
<br>
<div class="container mb-5">
    <div class="row align-items-start">

        <!-- <div class="col-4" style="background-color: #4493C4; height: 500px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
            <form class="search-focus mt-4 " style=" width:240px;border-radius: 30px; padding-left: 50px;">
              <input class="form-control" style="width: 200px; border-radius: 24px; text-align: start;" placeholder="Search"></input>
            </form>
            <div class="row bg-warning mt-4" style="padding-left: 20px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, quis.
            </div>
          </div> -->

        <div class="col"
            style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <div class="mt-4 mb-4">
                <!-- <h4><b>ULP FAKULTAS UIN BANDUNG</b></h4>
              <br>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolore, voluptatum obcaecati iusto labore quia!</p>
              <br>
              <p style="font-weight:900">Psikolog</p>
              <br> -->
                <div class="row row-cols-1 row-cols-md-4 g-4" style="padding-left: 15px; padding-right: 15px;">
                    <div class="col">
                        <div class="card border-0" style="justify-content: center;">
                            <img src="assets/img/about.jpg"
                                style="border-top-right-radius: 10px; border-top-left-radius: 10px;"
                                class="card-img-top" alt="...">
                            <div class="card-body"
                                style="background-color: #4493C4; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                <h5 class="card-title text-white text-center">Klaudius Waditra</h5>
                                <hr class="bg-white">
                                <p class="text-white">Fee : Rp 350.000</p>
                                <hr class="bg-white">
                                <p class="text-white">Deskripsi : Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit.
                                </p>
                                <hr class="bg-white">
                                <div class="container text-center">
                                    <button class="btn btn-light text-dark mt-3" href="#modal" data-toggle="modal"
                                        target="modal"
                                        style="height: 30px; width: 100px; padding-bottom: 30px;border-radius: 20px; padding-right: 15px"><b>Next</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form" action="POST">
                    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="date" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h5 class="modal-title mt-3" id="date" style="padding-left: 18px;" name="date">Tanggal
                                    Konsultasi</h5>
                                <div class="modal-header">
                                    <input name="date" type="date" class="form-control" id="date"
                                        placeholder="mm / dd / yyyy">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        style="border-radius:20px;">Close</button>
                                    <button type="submit" class="btn btn-primary" href="pembayaran.php"
                                        style="background-color: #233E99; border-radius:20px;">Tambahkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection