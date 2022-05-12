

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" class="rel">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&family=Ubuntu&display=swap');
</style>

  <title>full website</title>
</head>

<body>
<?php
  include 'menu.php';
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/900x900/?nature,weather" alt="images" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/900x900/?nature,mountains" alt="images" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/900x900/?nature,beaches" alt="images" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        
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
</div>

<section class="my-5">
  <div class=py-3>
    <h3 class="text-center">About Us</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
       <img src="https://source.unsplash.com/1600x1600/?water,forest" class="img-fluid  aboutimg" alt="img"/>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
       <h2 class="display-4">I am Deepak Maletha</h2> 
       <p class="py-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, suscipit? 
         Ipsam perspiciatis omnis beatae, qui deserunt eveniet non est! Quam architecto
         voluptatibus debitis perspiciatis dolore explicabo quaerat a, nesciunt
        temporibus odit cupiditate. Doloribus exercitationem consequuntur amet quasi iure nulla tenetur
        sit, amet consectetur adipisicing elit. Quasi, suscipit?  Ipsam perspiciatis.
        </p>
      <a href = "about.php" class="btn btn-success">Check more</a>
    </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class=py-3>
    <h3 class="text-center">Our Services</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 22rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,nature"  alt="...">
  <div class="card-body">
    <h5 class="card-title">Beatiful Nature</h5>
    <p class="card-text">Tuching my hards</p>
    <a href="#" class="btn btn-primary">Go see</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 22rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,nature"  alt="...">
  <div class="card-body">
    <h5 class="card-title">Beatiful Nature</h5>
    <p class="card-text">Tuching my hards</p>
    <a href="#" class="btn btn-primary">Go see</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 22rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,nature"  alt="...">
  <div class="card-body">
    <h5 class="card-title">Beatiful Nature</h5>
    <p class="card-text">Tuching my hards</p>
    <a href="#" class="btn btn-primary">Go see</a>
  </div>
</div>
  </div>

  </div>
  </div>
</section>

<section class="my-5">
  <div class=py-3>
    <h3 class="text-center">Our Gallery</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
<div class="col-lg-4 col-md-4 col-12">
      <div class="card" style="width: 25rem;">
  <img src="https://source.unsplash.com/900x900/?jungle,animals"  alt="..." class="imgfluid pb-3">
    </div>
    
</div>
  </div>
  </div>
    
</section>



<section class="my-5">
  <div class=py-3>
    <h3 class="text-center">Contact Us</h3>
  </div>

  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control"/>
      </div>
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" nsame="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>

      
    </form>
  </div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@CopyWrightDeepakMaletha</p>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>