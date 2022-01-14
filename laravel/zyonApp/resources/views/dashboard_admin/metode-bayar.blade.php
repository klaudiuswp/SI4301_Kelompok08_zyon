@extends('dashboard-layout.index')

@section('container')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="box-title">

                        <div class="d-flex justify-content-start">
                            <h3>Metode Pembayaran</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</a>
                        </div>

                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No Rekening</th>
                                <th scope="col">Nama Pemilik Rekening</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($rekenings as $rekening)
                                <tr>
                                    <td>{{ $rekening->no_rek }}</td>
                                    <td>{{ $rekening->nama }}</td>
                                    <td>{{ $rekening->payment_method }}</td>
                                    <td>
                                        <form action="{{ route('delete-metode-pembayaran') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="no_rek" value="{{ $rekening->no_rek }}">
                                            <button type="button" class="btn btn-primary d-inline" data-bs-toggle="modal"
                                                data-bs-target="#edit">Edit</button>

                                            <button type="submit" class="btn btn-danger d-inline"
                                                onclick="return confirm('Yakin hapus psikolog')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="edit" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Tujuan Transaksi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('edit-metode-pembayaran') }}" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $rekening->no_rek }}">

                                                    <div class="mb-3">
                                                        <label class="form-label">Nomor Rekening</label>
                                                        <input type="number" name="no_rek"
                                                            class="form-control @error('no_rek') is-invalid @enderror"
                                                            placeholder="Masukkan Nomor Rekening" value="{{ $rekening->no_rek }}"/>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Pemilik Rekening</label>
                                                        <input type="text" name="nama"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            placeholder="Masukkan Nama Pemilik Rekening" value="{{ $rekening->nama }}"/>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Jenis Pembayaran</label>
                                                        <input type="text" name="payment_method" class="form-control"
                                                            placeholder="Masukkan Jenis Pembayaran" value="{{ $rekening->payment_method }}"/>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tujuan Transaksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('tambah-metode-pembayaran') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3 align-item-center">

                                <div class="mb-3">
                                    <label class="form-label">Nomor Rekening</label>
                                    <input type="number" name="no_rek"
                                        class="form-control @error('no_rek') is-invalid @enderror"
                                        placeholder="Masukkan Nomor Rekening" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama Pemilik Rekening</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukkan Nama Pemilik Rekening" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Jenis Pembayaran</label>
                                    <input type="text" name="payment_method" class="form-control"
                                        placeholder="Masukkan Jenis Pembayaran" />
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
