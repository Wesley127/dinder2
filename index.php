<?php 
include ('includes/navbar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startpagina</title> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="button-box col-lg-12 mt-5">
        <a href="inloggen.php" class="btn btn-outline-dark btn-lg" style="width: 128px; margin-right: 50px;" role="button">Inloggen</a>
        <a href="registreren.php" class="btn btn-outline-dark btn-lg" style="width: 128px" role="button">Registreren</a>
   </div>

   <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="resources/img/dog1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="resources/img/dog2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="resources/img/dog3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
</div>

</body>
</html>