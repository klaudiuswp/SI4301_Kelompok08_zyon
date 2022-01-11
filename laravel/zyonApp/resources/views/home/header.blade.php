
<!-- NAVIGATOR -->
<div class="container-fluid navigator fixed-top">

    <x-jet-validation-errors class="mb-3 rounded-3" />

    <div class="navigator-center">

        <nav class="navbar navbar-expand-lg navbar-dark navigator-box" id="navbar">

            <div class="container-fluid">

                <a class="navbar-brand px-2" href="#">
                    <img src="home_assets/img/Logo.png" alt="logo" style="max-height: 45px;" id="logo">
                </a>
                <button class="navbar-toggler mx-3 toggler-minimize" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" id="toggler">
                    <span class="navbar-toggler-icon" id="icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText" style="width: 100vh;">
                    <ul class="navbar-nav nav nav-fill me-auto mb-2 mb-lg-0 w-100 px-2">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#fitur">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#about">Tentang</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            
                            @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="nav-link text-light">Dashboard</a>
                                @else
                                    <button class='btn btn-login' data-bs-toggle='modal' data-bs-target='#login-modal' id='login'>
                                        Login
                                    </button>

                                    {{-- <a href="{{ route('login') }}" class="text-muted">Log in</a> --}}

                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                                    @endif --}}
                                @endif
                            </div>
                            @endif
                                <?php
                                // if(!empty($_SESSION['user_id'])){
                                //     echo "
                                //     <form action='dashboard.php' method='GET'>
                                //         <button class='nav-link btn' style='border-style: none; color: white;' type='submit' value='".$tampil['ID']."' name='ID'>
                                //             Dashboard
                                //         </button>
                                //     </form>
                                //     ";
                                // }else{
                                //     echo "
                                //     <button class='btn btn-login' data-bs-toggle='modal' data-bs-target='#login-modal' id='login'>
                                //     Login
                                //     </button>
                                //     ";
                                // }
                                ?>
                                                        
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

    </div>
</div>