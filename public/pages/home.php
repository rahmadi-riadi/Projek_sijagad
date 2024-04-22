<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIJAGAD</title>
  <link rel="icon" href="path_ke_file_ikon_anda" type="image/x-icon" />
  <!-- menampilkan icon title  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <style>
    .custom-div {
      padding: 20px;
    }

    .carousel-item img {
      height: 100%;
      weight: 100%;
      object-fit: cover;
    }

    .carousel-item {
      height: 300px;
    }
  </style>
  <!-- <div class="d-flex justify-content-evenly custom-div">
      <div class="card mb-3" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            <img
              src="../../assets/img/logo_sijagad.png"
              class="img-fluid rounded-start"
              alt="..."
            />
          
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Selamat Datang !</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <div id="carouselExampleDark" class="carousel carousel-dark slide custom-div" style="margin-top: 60px;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="../../assets/img/Civil_Worker.jpg" class="d-block w-100" style="width:100%" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>

          <div class="d-grid gap-2 d-md-flex justify-content-center">
            <button class="btn btn-success me-md-2 rounded-pill" type="button">
              Link berikut
            </button>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../../assets/img/parliament-building.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block text-white">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-center">
            <button class="btn btn-success me-md-2 rounded-pill" type="button">
              Link berikut
            </button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../../assets/img/politicians_round_table.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block text-white">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-center">
            <button class="btn btn-success me-md-2 rounded-pill" type="button">
              Link berikut
            </button>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="row justify-content-center bg-success h-50" ;>

    <h2 style="text-align:center; color: white;margin-top: 40px;">Galeri </h2>
    <h2 style="text-align:center;color:yellow;">Kunjungan</h2>

    <div class="card m-3" style="width: 10rem;">
      <img src="assets/img/Civil_Worker" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card m-3" style="width: 10rem  ;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card m-3" style="width: 10rem  ;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card m-3" style="width: 10rem  ;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>



    <div class="d-grid gap-2 d-md-flex justify-content-center ">
      <button class="btn btn-warning me-md-2 text-white rounded-pill" type="button">
        Lainnya
      </button>
    </div>



    <div class="row justify-content-center bg-white h-50" style="margin-top: 40px;" ;>

      <h2 style="text-align:center;color:orange; margin-top:40px;">Layanan Kami</h2>
      <p style="text-align:center; color:grey;">Pilih layanan yang tersedia dalam sistem</p>

      <div class="card text-bg-success  m-3" style="width: 15rem; height: 20rem; text-align : center">
        <img src="assets/img/Civil_Worker" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card m-3" style="width: 15rem  ;height: 20rem; text-align : center">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card m-3" style="width: 15rem  ;height: 20rem; text-align : center">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>







    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>