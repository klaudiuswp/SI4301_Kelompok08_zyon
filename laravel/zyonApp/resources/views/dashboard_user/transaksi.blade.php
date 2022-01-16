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
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    {{-- <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Recent sales</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                            <select class="form-select shadow-none row border-top">
                                <option>March 2021</option>
                                <option>April 2021</option>
                                <option>May 2021</option>
                                <option>June 2021</option>
                                <option>July 2021</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Psikolog</th>
                                    <th class="border-top-0">Tanggal Konsultasi</th>
                                    <th class="border-top-0">Status Pembayaran</th>
                                    <th class="border-top-0">Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi_all as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->created_at }}</td>
                                    <td class="txt-oflo"></td>
                                    <td></td>
                                    <td class="txt-oflo">{{ $transaksi->status }}</td>
                                    <td><span class="text-success">Rp {{ number_format($transaksi->nominal) }}</span></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
