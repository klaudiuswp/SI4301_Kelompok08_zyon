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

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="container">
                        <h3 class="box-title">Riwayat Konsultasi</h3>
                        <br />
                    </div>
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Psikolog</th>
                                    <th scope="col">Status Konsultasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasi as $konsultasi_each)
                                    <form action="{{ route('konsultasi-update') }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="id" value="{{ $konsultasi_each->id }}">
                                        <tr>
                                            <th scope="row">{{ $konsultasi_each->id }}</th>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $konsultasi_each->status }}</td>
                                            <td>
                                                <div class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">edit</div>

                                            </td>
                                        </tr>

                                        <!-- modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Status Konsultasi
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    value="Sudah Konsultasi" id="flexRadioDefault1"
                                                                    @if ($konsultasi_each->status === 'Sudah Konsultasi') checked @endif/>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault1">Sudah
                                                                    Konsultasi</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="status"
                                                                    value="Belum Konsultasi" id="flexRadioDefault2"
                                                                    @if ($konsultasi_each->status === 'Belum Konsultasi') checked @endif />
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">Belum
                                                                    Konsultasi</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary text-white"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
