<!-- LOGIN MODAL -->
<div class='modal content' id='login-modal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered'>

        <div class='modal-content'>
            <div class='modal-header p-5 pb-4 border-bottom-0'>
                <h2 class='fw-bold mb-0'>Masuk</h2>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body px-5 pb-5'>
                

                @if (session('status'))
                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Email') }}" />

                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                    name="email" :value="old('email')" required />
                        <x-jet-input-error for="email"></x-jet-input-error>
                    </div>

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Password') }}" />

                        <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                    name="password" required autocomplete="current-password" />
                        <x-jet-input-error for="password"></x-jet-input-error>
                    </div>

                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <label class="custom-control-label" for="remember_me">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <x-jet-button class="w-100">
                        {{ __('Log in') }}
                    </x-jet-button>

                    <div class="mt-2 mb-0">
                        <div class="d-flex justify-content-start">
                            @if (Route::has('password.request'))
                                <a class="text-muted me-3" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    @if (Route::has('register'))

                    <hr class='my-4'>

                    <h2 class='fs-5 fw-bold mb-3'>Belum memiliki akun?</h2>
                        {{-- <a href="{{ route('register') }}" class="w-100 mb-2 btn btn-lg rounded-4 btn-secondary">Registrasi</a> --}}
                        <button class='w-100 mb-2 btn btn-lg rounded-4 btn-secondary' type='button' data-bs-toggle='modal' data-bs-target='#regis-modal' data-dismiss='modal' aria-label='Close'>
                            Registrasi
                        </button>
                    @endif
                </form>


                {{-- <form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
                    <div class='form-floating mb-3'>
                        <input type="email" name="email-user" class="form-control rounded-4" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>

                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class='form-floating mb-3'>
                        <input type="password" name="pw-user" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>

                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <button name='login' type='submit' class='w-100 mb-2 btn btn-lg rounded-4 btn-primary'>
                        Masuk
                    </button>
                    <a class='btn' data-bs-toggle='modal' data-bs-target='#resetpass-modal' data-dismiss='modal' aria-label='Close'><small class='text-muted'>Lupa Password?</small></a>

                    <hr class='my-4'>

                    <h2 class='fs-5 fw-bold mb-3'>Belum memiliki akun?</h2>
                    <button class='w-100 mb-2 btn btn-lg rounded-4 btn-secondary' type='button' data-bs-toggle='modal' data-bs-target='#regis-modal' data-dismiss='modal' aria-label='Close'>
                        Registrasi
                    </button>

                </form> --}}
                
            </div>
        </div>
    </div>
</div>

{{-- NEW REGIS --}}

<div class="modal content" id="regis-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Registrasi</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Name') }}" />

                        <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                        <x-jet-input-error for="name"></x-jet-input-error>
                    </div>

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Email') }}" />

                        <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                    :value="old('email')" required />
                        <x-jet-input-error for="email"></x-jet-input-error>
                    </div>

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Password') }}" />

                        <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                    name="password" required autocomplete="new-password" />
                        <x-jet-input-error for="password"></x-jet-input-error>
                    </div>

                    <div class="mb-3">
                        <x-jet-label value="{{ __('Confirm Password') }}" />

                        <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <x-jet-checkbox id="terms" name="terms" />
                                <label class="custom-control-label" for="terms">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                </label>
                            </div>
                        </div>
                    @endif

                    <div class="mt-4 mb-0">
                        <x-jet-button class="w-100">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- REGIS MODAL -->
{{-- <div class="modal content" id="regis-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Masuk</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <form class="row g-3" action="create.php" method="post">
                    <div class="form-floating col-md-6">
                        <input type="text" name="namaD" class="form-control rounded-4" id="floatingInput" placeholder="abc">
                        <label class="px-3" for="#floatingInput">Nama Depan</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="text" name="namaB" class="form-control rounded-4" id="floatingInput" placeholder="abc">
                        <label class="px-3" for="#floatingInput">Nama Belakang</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-12">
                        <input type="email" name="email-user" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                        <label class="px-3" for="floatingInput">Email address</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="password" name="pw-user" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                        <label class="px-3" for="floatingPassword">Password</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="password" name="konf-pw-user" class="form-control rounded-4" id="floatingInput" placeholder="abc">
                        <label class="px-3" for="#floatingInput">Konfirmasi Password</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-12">
                        <input type="date" name="tanggal-lahir" class="form-control rounded-4" id="floatingInput" placeholder="17/11/2021">
                        <label class="px-3" for="#floatingInput">Tanggal Lahir</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-floating col-md-12">
                        <!-- NOMOR TELPON -->
                        <input type="text" name="no-wa" class="form-control rounded-4" id="phoneNumber" placeholder="(081x) xxxx-xxxx" required>
                        <label class="px-3" for="#phoneNumber">Nomor Handphone (Whatsapp)</label>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <br>

                    <div class="form-check col-mb-2">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required />
                        <label class="form-check-label" for="myCheck">Saya Menyetujui</label>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </div>
                    <button type="button" name="regis" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary">Daftarkan
                        Akun
                    </button>

                </form>
            </div>
        </div>
    </div>
</div> --}}