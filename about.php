

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
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Deepak Maletha</h1>
    <p>I am full stack devlopper and more on</p>
  </div>
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

<footer>
    <p class="p-3 bg-dark text-white text-center">@CopyWrightDeepakMaletha</p>
  </footer>


</body>
</html>