<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-sm-12 col-md-8 col-lg-5 my-4">
            <div class="card shadow-sm px-1 mx-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
{{-- <div class="modal content" id="regis-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Masuk</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                {{ $slot }}
            </div>
        </div>
    </div> --}}
</div>