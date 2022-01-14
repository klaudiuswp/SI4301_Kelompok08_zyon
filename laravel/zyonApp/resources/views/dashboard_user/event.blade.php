@extends('dashboard-layout.index')

@section('container')
<header class="d-flex py-3 bg-white shadow-sm border-top mb-4">
    <div class="container">
        <h2 class="h4 font-weight-bold px-4 pt-2">
            <b>{{ $pos }}</b>
        </h2>
    </div>
</header>
<br>
<div class="container">
    <div class="row m-4" style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-15">
                    <div class="container" style="padding-top: 20px;">
                        <table class="table">
                            <thead>
                                <tr class="text-center" style="height: 20px;">
                                    <th>No</th>
                                    <th>Psikolog</th>
                                    <th>Tanggal Konsultasi</th>
                                    <th>Status Pembayaran</th>
                                    <th>Status Konsultasi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($konsultasi_all as $konsultasi)
                                <tr class="text-center" style="height: 60px;">
                                    <td>{{ $konsultasi->id }}</td>
                                    <td></td>
                                    <td>{{ $konsultasi->tanggal }}</td>
                                    <td></td>
                                    <td>{{ $konsultasi->status }}</td>
                                </tr>
                                @endforeach
                                    
                            </tbody>
    
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
@endsection