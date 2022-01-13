@extends('dashboard-layout.index')

@section('container')
<br>
<div class="container mt-2">
    <h3><b>Event</b></h3>
</div>
<br>
<div class="container">
    <div class="row" style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
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
    
                                    <tr class="text-center" style="height: 60px;">
                                        <td>1</td>
                                        <td>Alpen Aene</td>
                                        <td>12/12/2022</td>
                                        <td>Menunggu Konfirmasi</td>
                                        <td>Waiting</td>
                                    </tr>
                            </tbody>
    
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection