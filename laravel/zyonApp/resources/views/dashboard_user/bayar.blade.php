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

    <header class="d-flex py-3 bg-white shadow-sm border-top mb-4">
        <div class="container">
            <h2 class="h4 font-weight-bold px-4 pt-2">
                <b>Pembayaran</b>
            </h2>
        </div>
    </header>
    <div class="container">
        <form action="/pembayaran-bayar" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="psikolog" value="{{ $psikolog->id }}">
            <input type="hidden" name="tanggal" value="{{ $tanggal }}">
            <input type="hidden" name="customer_id" value="{{ \Auth::user()->id }}">
            <div class="row mx-3 mb-5 pb-5"
                style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                <div class="col-8">
                    <div style="padding-left: 50px; padding-right:70px;">

                        <div class="mt-5">
                            <label class="form-label">
                                <h5><b>Nama Lengkap Rekening Asal</b></h5>
                            </label>
                            <input name="nama" type="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Alpen Dzaki"
                                style="border-radius: 50px; border-color: #233E99;">
                        </div>
                        <div class="mb-4 mt-4">
                            <label class="form-label">
                                <h5><b>No Rekening Asal</b></h5> 
                            </label>
                            <input name="no_rek_asal" type="number" class="form-control @error('no_rek_asal') is-invalid @enderror" placeholder="123"
                                style="border-radius: 50px; border-color: #233E99;">
                        </div>
                        <div class="mb-4 mt-4">
                            <label for="payment" class="form-label">
                                <h5><b>Payment Method</b></h5>
                            </label>
                            <select name="no_rek_tujuan" class="form-select" id="payment"
                                aria-label="Default select example" style="border-radius: 50px; border-color: #233E99; @error('no_rek_tujuan') is-invalid @enderror">
                                <option selected hidden>Choose payment method</option>

                                @foreach ($rekenings as $rekening)
                                    <option value="{{ $rekening->no_rek }}">{{ $rekening->payment_method }} |
                                        {{ $rekening->no_rek }} | {{ $rekening->nama }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-4 mt-4">
                            <label for="payment_number" class="form-label">
                                <h5><b>Upload Bukti Transfer</b></h5>
                            </label>
                            <input name="bukti_transaksi" class="form-control @error('bukti_transaksi') is-invalid @enderror" type="file" id="formFile"
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
                                    <div class="col-6"><b>{{ $psikolog->nama }}</b></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 text-secondary">Tanggal Konsultasi :</div>
                                    <div class="col-6"><b>{{ $tanggal }}</b></div>
                                </div>
                                <div class="row" style="padding-top: 80px; padding-right:50px">
                                    <div class="col-6 text-secondary">Total :</div>
                                    <div class="col-6"><b>Rp {{ number_format($psikolog->fee) }}</b></div>

                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12" style="padding-top: 10px;">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn text-white"
                                                style="background-color: #233E99;border-radius: 50px; width: fit-content;">Kirim
                                                Permintaan <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </div>
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

        </form>


    </div>
    <br>
@endsection
