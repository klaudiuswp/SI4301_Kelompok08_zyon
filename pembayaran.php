<!DOCTYPE html>
<html>

<head>
    <style>
        .vl {
            border-left: 1px solid rgb(0, 0, 0);
            height: 500px;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Zyon Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body style="background-color: #ECEDF0;">
    <nav class="navbar navbar-expand-sm" style="background-color:#233E99">
        <a class="navbar-brand px-2" href="index.php">
            <img src="assets/img/Logo.png" alt="logo" style="max-height: 45px;" id="logo">
        </a>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="padding-right: 5%;">
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item dropdown" style="padding-right: 50px;">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"><b>Alpen</b></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Event</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container mt-2">
        <h3><b>Pembayaran</b></h3>
    </div>
    <br>
    <div class="container">
        <div class="row" style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <div class="col-8">
                <div style="padding-left: 50px; padding-right:70px;">
                    <div class="mt-5">
                        <label for="email" class="form-label"><h5><b>Nama Lengkap Rekening Asal</b></h5></label>
                        <input type="email" class="form-control" id="email" placeholder="Alpen Dzaki" style="border-radius: 50px; border-color: #233E99;">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="name" class="form-label"><h5><b>No Rekening Asal</b></h5></label>
                        <input type="text" class="form-control" id="name" placeholder="123" style="border-radius: 50px; border-color: #233E99;">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="payment" class="form-label"><h5><b>Payment Method</b></h5></label>
                        <select class="form-select" id="payment" aria-label="Default select example" style="border-radius: 50px; border-color: #233E99;">
                            <option selected hidden>Choose payment method</option>
                            <option value="1">ATM</option>
                            <option value="2">Indomaret</option>
                            <option value="3">Virtual Account</option>
                        </select> 
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="payment_number" class="form-label"><h5><b>Upload Bukti Transfer</b></h5></label>
                        <input class="form-control" type="file" id="formFile" style="border-radius: 50px; border-color: #233E99;">
                    </div>
                </div>    
            </div>
            <div class="col-4 vl">
                <h5 class="mt-4" style="padding-top: 60px;"><b>Receipt Summary</b></h5>
                <div class="container-fluid">
                    <div class="row">
                    
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-6 text-secondary">Psikolog :</div>
                                <div class="col-6"><b>Muhammad Alpen Dazki S.Psi</b></div>
                            </div>
                            <div class="row mb-5 mt-5">
                                <div class="col-6 text-secondary">Tanggal Konsultasi :</div>
                                <div class="col-6"><b>12/12/2022</b></div>
                            </div>
                            <div class="row" style="padding-top: 100px;">
                                <div class="col-md-8" style="padding-top: 10px;"><b>Total : Rp 1.000.000</b></div>
                                <div class="col-6 col-md-4">
                                    <div class="btn text-white" style="background-color: #233E99;border-radius: 50px; width: 100px;">Kirim <i class="bi bi-send"></i></div>
                                </div>
                              </div>
                            <!-- <table class="table table-borderless mt-4">
                                <tbody>
                                  <tr>
                                    <td class="text-secondary" >Psikolog :</td>
                                    <td></td>
                                    <td><b>Muhammad Alpen Dzaki S.Psi</b></td>
                                  </tr>
                                  <tr>
                                    <td class="text-secondary">Tangggal Konsultasi :</td>
                                    <td ></td>
                                    <td>Thornton</td>
                                  </tr>
                                  <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                  </tr>
                                </tbody>
                              </table> -->
                        </div>
                    </div>
                </div>
               
               
                
            </div>
        </div>


    </div>

    <br>
    <br>
    <!-- FOOTER -->
    <div class="footer text-center mt-4 py-2 foot sticky-bottom" id="foot">
        <footer class="d-flex flex-wrap justify-content-between align-items-center my-2 w-100">
            <div class="col-md-4 d-flex align-items-center">
                <span class="logo"><img src="assets/img/Logo.png" alt="logo" width="200px"></span>
            </div>
            <div class="col-md-4 justify-content-end d-flex">
                <ul class="contact">
                    <li>
                        <a class="text-light row" href="https://wa.me/message/ORU2POH45X6OC1">
                            <span class="col-sm-4">
                                WHATSAPP
                            </span>
                            <span class="col-sm-8">
                                : +62 821-2886-3838
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="text-light row" href="https://www.instagram.com/zyon.id/">
                            <span class="col-sm-4">
                                INSTAGRAM
                            </span>
                            <span class="col-sm-8">
                                : @ZYON.ID
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="text-light row" href="tel:+6282128863838">
                            <span class="col-sm-4">
                                TELEPON
                            </span>
                            <span class="col-sm-8">
                                : +62 821-2886-3838
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>