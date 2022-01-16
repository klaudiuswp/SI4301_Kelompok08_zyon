@extends('dashboard-layout.index')

@section('container')

@if (session('success'))
<div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="date" aria-hidden="true">
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses!</strong> {{ session('success') }}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>
@endif

<header class="d-flex py-3 bg-white shadow-sm border-top mb-4">
    <div class="container">
        <h2 class="h4 font-weight-bold px-4 pt-2">
            <b>Pilih psikolog</b> untuk melanjutkan pendaftaran
        </h2>
    </div>
</header>
    <div class="container mb-5">
        <div class="row align-items-start">

            <div class="col m-4"
                style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                <div class="mt-4 mb-4">
                    <div class="row row-cols-1 row-cols-md-4 g-4" style="padding-left: 15px; padding-right: 15px;">
                        @foreach ($psikologs as $psikolog)
                            <form action="/pembayaran" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $psikolog->id }}" name="id">

                                <div class="col">
                                    <div class="card border-0" style="justify-content: center;">
                                        <style>

                                        </style>
                                        <img src="{{ asset('storage/' . $psikolog->foto_psikolog) }}"
                                            style="border-top-right-radius: 10px; border-top-left-radius: 10px; height:190px;"
                                            class="card-image card-img-top">
                                        <div class="card-body"
                                            style="background-color: #4493C4; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                                            <h5 class="card-title text-white text-center">{{ $psikolog->nama }}</h5>
                                            <hr class="bg-white">
                                            <p class="text-white"><b>Fee :</b> Rp {{ number_format($psikolog->fee) }}</p>
                                            <hr class="bg-white">
                                            <p class="text-white"><b>Deskripsi :</b> {{ $psikolog->deskripsi }}</p>
                                            <hr class="bg-white">
                                            <div class="container text-center">
                                                <button type="button" class="btn btn-light text-dark mt-3" target="modal"
                                                    data-bs-toggle="modal" data-bs-target="#bayar"
                                                    style="height: 30px; width: 100px; padding-bottom: 30px;border-radius: 20px; padding-right: 15px"><b>Next</b></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="date"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <h5 class="modal-title mt-3" id="date" style="padding-left: 18px;" name="date">
                                                Tanggal Konsultasi
                                            </h5>
                                            <div class="modal-header">
                                                <input name="tanggal" type="date" class="form-control" id="date"
                                                    placeholder="mm / dd / yyyy">
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                    data-bs-dismiss="modal" aria-label="Close"
                                                    style="border-radius:20px;">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color: #233E99; border-radius:20px;">Tambahkan</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                        @endforeach
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection
