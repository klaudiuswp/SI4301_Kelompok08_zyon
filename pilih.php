<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
          name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template"
        />
        <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Zyon Indonesia</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            
        <!-- Template Main CSS File -->
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>


    </head>
    <body style="background-color: #ECEDF0;">
      <nav class="navbar navbar-expand-sm" style="background-color:#233E99">
        <a class="navbar-brand px-2" href="index.php">
          <img src="assets/img/Logo.png" alt="logo" style="max-height: 45px;" id="logo" >
        </a>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5"  style="padding-right: 5%;">
               
          <ul class="navbar-nav ms-auto d-flex align-items-center" >
              <li class="nav-item dropdown" style="padding-right: 50px;">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"><b>Alpen</b></a>
                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Event</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
              
          </ul>
      </div>
      </nav>
      <br>
      <div class="container mt-2">
        <h3><b>Pilih Psikolog</b></h3>
      </div>
      <br>
      <div class="container mb-5">
        <div class="row align-items-start">

          <!-- <div class="col-4" style="background-color: #4493C4; height: 500px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
            <form class="search-focus mt-4 " style=" width:240px;border-radius: 30px; padding-left: 50px;">
              <input class="form-control" style="width: 200px; border-radius: 24px; text-align: start;" placeholder="Search"></input>
            </form>
            <div class="row bg-warning mt-4" style="padding-left: 20px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, quis.
            </div>
          </div> -->
          
          <div class="col" style="background-color: rgb(255, 255, 255); border-top-right-radius: 10px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
            <div class="mt-4 mb-4">
              <!-- <h4><b>ULP FAKULTAS UIN BANDUNG</b></h4>
              <br>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolore, voluptatum obcaecati iusto labore quia!</p>
              <br>
              <p style="font-weight:900">Psikolog</p>
              <br> -->
              <div class="row row-cols-1 row-cols-md-4 g-4" style="padding-left: 15px; padding-right: 15px;" >
                <div class="col" >
                  <div class="card border-0" style="justify-content: center;">
                    <img src="assets/img/about.jpg" style="border-top-right-radius: 10px; border-top-left-radius: 10px;" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #4493C4; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px;">
                      <h5 class="card-title text-white text-center">Klaudius Waditra</h5>
                      <hr class="bg-white">
                      <p class="text-white">Fee : Rp 350.000</p>
                      <hr class="bg-white">
                      <p class="text-white">Deskripsi : Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      </p>
                      <hr class="bg-white">
                      <div class="container text-center">
                        <button class="btn btn-light text-dark mt-3" href="#modal" data-toggle="modal" target="modal" style="height: 30px; width: 100px; padding-bottom: 30px;border-radius: 20px; padding-right: 15px"><b>Next</b></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form" action="POST">
                <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="date" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h5 class="modal-title mt-3" id="date" style="padding-left: 18px;" name = "date">Tanggal Konsultasi</h5>
                            <div class="modal-header">
                                <input name="date" type="date" class="form-control" id="date" placeholder="mm / dd / yyyy">
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius:20px;">Close</button>
                                <button type="submit" class="btn btn-primary" href="pembayaran.php" style="background-color: #233E99; border-radius:20px;" >Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <!-- FOOTER -->
    <div class="footer text-center mt-auto py-2 foot sticky-bottom" id="foot">
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

