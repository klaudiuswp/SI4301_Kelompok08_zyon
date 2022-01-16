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

    <div class="container-fluid">
        <br />
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">Semua Transaksi</h3>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama User</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $transaksi_each)
                                <tr>
                                    <td>{{ $transaksi_each->id }}</td>
                                    <td>{{ $nama }}</td>
                                    <td>{{ $transaksi_each->nominal }}</td>
                                    <td>{{ $transaksi_each->status }}</td>
                                    <td>
                                        <form action="/transaksi/delete" method="POST">
                                          @csrf
                                          <input type="hidden" value="{{ $transaksi_each->id }}" name="id_delete">
                                            <div class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">edit</div>
                                            <button type="submit" class="btn btn-danger d-inline"
                                                onclick="return confirm('Yakin hapus Transaksi')">Delete</button>

                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Status Pembnayaran
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center">
                                                    <img src="img/about.jpg" alt="" style="width: 400px" />
                                                </div>
                                                <div>
                                                    <h6>Status Pembayaran</h6>
                                                    <br />
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                            id="flexRadioDefault1" />
                                                        <label class="form-check-label" for="flexRadioDefault1">Belum
                                                            Bayar</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                            id="flexRadioDefault2" checked />
                                                        <label class="form-check-label" for="flexRadioDefault2">Menunggu
                                                            Konfirmasi</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                            id="flexRadioDefault2" checked />
                                                        <label class="form-check-label" for="flexRadioDefault2">Sudah
                                                            Bayar</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
                @endforeach

                </tbody>
                </table>

            </div>
        </div>
    </div>




@endsection
