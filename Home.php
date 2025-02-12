<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS3/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>BLOOD BANK</title>
</head>
<body class="vh-100 overflow-x-hidden">
  <?php include("shortcode/nav.php")  ?>

  <div id="carouselExampleCaptions" class="carousel slide carousel-fade  wow fadeInUp"data-wow-delay="0.1s">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner2.jpg" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item blood_img">
        <img src="images/blood5.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
        <div class="carousel-item blood_img">
          <img src="images/banner1.jpg" class="d-block w-100 img3" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
       </div>

    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <br>

  <div class="row ">
    <h1 class="d-flex justify-content-center fs-1">Blood groups</h1>

    <div class="col-lg-6 mb-sm-0 fs-5 col-sm-12">
      <div class="card">
        <div class="card-body">
          <p class="card-text">Blood groups are classified primarily based on the presence or absence of antigens and
            antibodies in the blood.
            The most common blood group system is the ABO system, which consists of four main blood groups:</p>
          <ul>
            <li>Blood Group A Positive or Negative</li>
            <li>Blood Group B Positive or Negative</li>
            <li>Blood Group AB Positive or Negative</li>
            <li>Blood Group O Positive or Negative</li>
          </ul>
          <p class="card-text"><span>Blood donation is the gift of life, the greatest gift one can give.<br></span></p>
          <a href="register.php" class="btn btn-outline-primary btn-lg fs-4">Become a Donor</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-6">
      <div class="card">
        <div class="card-body ">
          <img src="images/BloodTypes.jpg" class="rounded " alt="">
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="row mb-4  mx-2">
    <div class="col-md-9 col-lg-push-9">
    <h3>UNIVERSAL DONORS AND RECIPIENTS</h3>
        <p>The most common blood type is O, followed by type A.Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
    </div>
    <div class="col-md-3 col-lg-pull-2 align-content-center">
        <a class="btn btn-lg btn-outline-danger btn-block" href="search-donor.php">Search a Donor</a>
    </div>
</div>

 
<?php include("shortcode/footer.php")  ?>  

  <!-- End of .container -->
</body>

</html>
