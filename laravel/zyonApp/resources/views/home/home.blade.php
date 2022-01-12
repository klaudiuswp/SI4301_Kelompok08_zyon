@extends('home.index')

@section('container')

{{-- <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Berhasil Login!</strong> Halo ".$tampil['NamaDepan']."
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> --}}


    @include('home.modal')

    <!-- UTAMA -->
    <div class="container-fluid bg-image bg-cover" style="height: 100vh;">
        <div class="mask bg-cover-mask" style="height: 100vh;">

            <!-- ISI-UTAMA -->
            <div class="container-fluid konten-utama">
                <h1 class="text-utama">
                    {{-- {{ Auth::user()->name }} --}}
                    Ayo Mulai Peduli pada Kesehatan Mental !
                </h1>
                <a class="button-utama" href="#fitur">
                    Konsultasi dengan Ekspert
                </a>
            </div>

        </div>
    </div>

    <!-- FITUR -->
    <div class="container-fluid" id="fitur" style="height: 110vh;">

        <!-- HEADER FITUR -->
        <div class="fitur-head">
            <h1 class="head-text">
                FITUR ZYON
            </h1>
        </div>

        <!-- ISI FITUR -->
        <div class="container mt-5">

            <div class="col-md-12">
                <h4 class="konsultasi-head">KONSULTASI DENGAN EKSPERT</h4>

                <div class="card-text box-deskripsi-konsultasi">
                    
                    <p class="card-text">
                        Zyon bekerja sama dengan biro-biro psikologi di Indonesia untuk mempermudah user menemukan dan melakukan Konsultasi
                    </p>
                </div>

                <div class="card-text box-btn-konsultasi">
                    <a class="btn-fitur-konsultasi" data-bs-toggle="modal" data-bs-target="#pilih-biro">
                        MULAI KONSULTASI
                    </a>
                </div>

            </div>
        </div>


        <!-- PILIH BIRO MODAL -->
        <div class="modal content" id="pilih-biro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">

                <div class="modal-content">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h2 class="fw-bold mb-0">Pilih Biro</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mb-0">
                        <!-- Isi Biro -->
                        <div class="accordion isi-biro">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            ULP Fakultas Psikologi UIN SGD Bandung
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        ULP Fakultas Psikologi adalah biro psikologi yang berbasis di UIN SGD Bandung.
                                        <a href="https://api.whatsapp.com/send?phone=6282128863838&text=Saya%20tertarik%20melakukan%20konsultasi%20dengan%20ULP%20Fakultas%20Psikologi.">Lanjutkan</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- ABOUT US -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg pb-5">
        <div class="container-fluid pt-5">
            <div class="head">
                <h3 class="text-center">Tentang Kami</h3>
                <p class="mx-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque ligula dictum magna elementum, sit amet pretium mauris fermentum. Nam fringilla sem nibh, non rhoncus odio iaculis et. Donec hendrerit tempor quam eu venenatis. Aliquam ac bibendum
                    purus. Nullam id elementum elit. Aenean vel aliquet tortor, ultricies cursus ante.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-5 video-box d-flex justify-content-center align-items-stretch position-relative">
                    <a href="https://www.youtube.com/watch?v=bIKB15NT7uk" class="play-btn mb-4" target="_blank"></a>
                </div>

                <div class="col-lg-7 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3 class="text-center">YANG BISA KAMU DAPATKAN ?</h3>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hands-helping"></i></div>
                        <h4 class="title">KONSULTASI</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="far fa-comments"></i></i>
                        </div>
                        <h4 class="title">KOMUNIKASI</h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hand-holding-heart"></i></div>
                        <h4 class="title">HASIL</h4>
                        <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
          </div>
    </div>
    {{-- <div class="preloader">
        
      </div> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('home.footer')
@endsection
