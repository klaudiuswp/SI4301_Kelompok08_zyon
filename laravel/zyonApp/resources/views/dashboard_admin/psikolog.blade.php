@extends('dashboard-layout.index')

@section('container')

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Sukses!</strong> {{ session('success') }}
    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="box-title">

                        <div class="d-flex justify-content-start">
                            <h3>All Psikolog</h3>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="/tambah-psikolog">Tambah</a>
                        </div>

                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Psikolog</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($psikologs as $psikolog)
                                <tr>
                                    <td>{{ $psikolog->id }}</td>
                                    <td>{{ $psikolog->nama }}</td>
                                    <td>{{ $psikolog->fee }}</td>
                                    <td>{{ $psikolog->deskripsi }}</td>
                                    <td>
                                        <form action="/psikolog-delete" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $psikolog->id }}">
                                            <button type="button" class="btn btn-primary d-inline" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">edit</button>

                                            <button type="submit" class="btn btn-danger d-inline"
                                                onclick="return confirm('Yakin hapus psikolog')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Psikolog</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/psikolog-edit" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                  @csrf
                                                    <input type="hidden" name="id" value="{{ $psikolog->id }}">

                                                    <div class="mb-3 align-item-center">
                                                      
                                                        <!-- Current Profile Photo -->
                                                        <div class="mt-2">
                                                            <img src="{{ asset('storage/'.$psikolog->foto_psikolog) }}"
                                                                class="rounded-circle" height="80px" width="80px">
                                                        </div>

                                                        <!-- New Profile Photo Preview -->
                                                        <div class="mt-2" x-show="photoPreview"
                                                            style="display: none;">
                                                            <img x-bind:src="photoPreview" class="rounded-circle"
                                                                width="80px" height="80px">
                                                        </div>
                                                        <input class="@error('foto_psikolog') is-invalid @enderror" type="file"
                                                        name="foto_psikolog">

                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Psikolog</label>
                                                        <input type="text" name="nama"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            placeholder="nama psikolog" value="{{ $psikolog->nama }}" />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Fee</label>
                                                        <input type="text" name="fee" class="form-control"
                                                            placeholder="Fee" value="{{ $psikolog->fee }}" />
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Deskprisi</label>
                                                            <textarea name="deskripsi" class="form-control" rows="2"
                                                                placeholder="Deskripsi">{{ $psikolog->deskripsi }}</textarea>
                                                        </div>
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

    </div>
@endsection
