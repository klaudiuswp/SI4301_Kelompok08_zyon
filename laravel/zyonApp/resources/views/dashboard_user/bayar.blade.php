@extends('dashboard-layout.index')

@section('container')

<header class="d-flex py-3 bg-white shadow-sm border-top mb-4">
    <div class="container">
        <h2 class="h4 font-weight-bold px-4 pt-2">
            <b>Pembayaran</b>
        </h2>
    </div>
</header>
    <div class="container">
        <div class="row mx-3 mb-5 pb-5"
            style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <div class="col-8">
                <div style="padding-left: 50px; padding-right:70px;">
                    <div class="mt-5">
                        <label for="email" class="form-label">
                            <h5><b>Nama Lengkap Rekening Asal</b></h5>
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="Alpen Dzaki"
                            style="border-radius: 50px; border-color: #233E99;">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="name" class="form-label">
                            <h5><b>No Rekening Asal</b></h5>
                        </label>
                        <input type="text" class="form-control" id="name" placeholder="123"
                            style="border-radius: 50px; border-color: #233E99;">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="payment" class="form-label">
                            <h5><b>Payment Method</b></h5>
                        </label>
                        <select class="form-select" id="payment" aria-label="Default select example"
                            style="border-radius: 50px; border-color: #233E99;">
                            <option selected hidden>Choose payment method</option>
                            <option value="1">ATM</option>
                            <option value="2">Indomaret</option>
                            <option value="3">Virtual Account</option>
                        </select>
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="payment_number" class="form-label">
                            <h5><b>Upload Bukti Transfer</b></h5>
                        </label>
                        <input class="form-control" type="file" id="formFile"
                            style="border-radius: 50px; border-color: #233E99;">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h5 class="mt-4" style="padding-top: 60px;"><b>Receipt Summary</b></h5>
                <div class="container-fluid">
                    <div class="row">

                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-6 text-secondary">Psikolog :</div>
                                <div class="col-6"><b>Muhammad Alpen Dazki S.Psi</b></div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-6 text-secondary">Tanggal Konsultasi :</div>
                                <div class="col-6"><b>12/12/2022</b></div>
                            </div>
                            <div class="row" style="padding-top: 100px; padding-right:50px align-bottom">
                                <div class="col-md-8" style="padding-top: 10px;"><b>Total : Rp 1.000.000</b></div>
                                <div class="col-6 col-md-4">
                                    <button class="btn text-white"
                                        style="background-color: #233E99;border-radius: 50px; width: 100px;">Kirim <i
                                            class="bi bi-send"></i></button>
                                </div>
                            </div>
                            <!-- <table class="table table-borderless mt-4">
                                    <tbody>
                                      <tr>
                                        <td class="text-secondary" >Psikolog :</td>
                                        <td></td>
                                        <td><b>Muhammad Alpen Dzaki S.Psi</b></td>
                                      </tr>
                                      <tr>
                                        <td class="text-secondary">Tangggal Konsultasi :</td>
                                        <td ></td>
                                        <td>Thornton</td>
                                      </tr>
                                      <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                      </tr>
                                    </tbody>
                                  </table> -->
                        </div>
                    </div>
                </div>



            </div>

        </div>


    </div>
<br>
@endsection
