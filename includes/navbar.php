<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <!--      Navbar      -->

    <div class="container">
        <nav>
            <nav class="navbar navbar-expand-md navbar-light">
                <a href="#" class="navbar-brand">Dinder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expended="false" ; aria-lable="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="toggleMobileMenu">
                    <ul class="navbar-nav ms-auto text-center">
                        <li>
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Registreren</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Experience</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </div>

</body>
</html>