<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Carrossel</title>
    <link href="testecarrosselStyle.css" rel="stylesheet">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</head>
<body>
<?php
    include("header.php");
?>
<div class="backgroundCarrossel">
<div id="carouselExampleIndicators" class="carousel slide carousel-fade child" style="
    z-index:0;
    width: 50%;
    margin-top: 9%; 
    border-style: none;
    display: block;
    justify-content: center;">

 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Slide1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
</body>
</html>