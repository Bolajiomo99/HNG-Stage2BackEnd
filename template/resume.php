<?php

$sent = false;
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sent = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Resume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>

    <?php if ($sent) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Email from <?php echo $email ?> Sent!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-fluid rounded align-self-center" src="img/hnglogo.png" alt="Adeoluwa Adeboye" width="30px"></img>HNG/IGX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#message-me">Message Me</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contacts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="tel:+2348102008245" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                <i class="fas fa-phone-alt"></i>
                                Tel
                            </a>
                            <a href="https://wa.me/+2348102008245?text=I'm%20interested%20in%20Web-Development" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                <i class="fab fa-whatsapp"></i>
                                Whatsapp
                            </a>
                            <a href="https://www.linkedin.com/in/adeoluwa-adeboye-051057146/" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                <i class="fab fa-linkedin-in"></i>
                                LinkedIn
                            </a>
                            <a href="https://github.com/JUGG097" target="_blank" rel="noopener noreferrer" class="dropdown-item">
                                <i class="fab fa-github"></i>
                                GitHub
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-3">
            <div class="row">

                <div class="col-12 col-sm-4 text-center">
                    <img class="img-fluid rounded align-self-center" src="img/Adeoluwa_Adeboye_Transparent.png" alt="Adeoluwa Adeboye" width="250px"></img>
                </div>



                <div class="col-12 col-sm-8 text-center my-auto">
                    <h2 class="display-5 my-color-2">
                        Adeoluwa Adeboye
                    </h2>
                    <p class="lead">
                        FrontEnd | BackEnd | Deployment
                    </p>
                    <p>
                        <span class="badge badge-pill badge-primary">
                            <i class="fab fa-html5"></i> HTML
                        </span>
                        |
                        <span class="badge badge-pill badge-warning">
                            <i class="fab fa-css3-alt"></i> CSS
                        </span>
                        |
                        <span class="badge badge-pill badge-primary">
                            <i class="fab fa-js"></i> JS
                        </span>
                        |
                        <span class="badge badge-pill badge-info">
                            <i class="fab fa-react"></i>
                            React.js
                        </span>
                        |
                        <span class="badge badge-pill badge-dark">
                            <i class="fab fa-bootstrap"></i>
                            Bootstrap
                        </span>
                        |
                        <span class="badge badge-pill badge-info">
                            <i class="fab fa-php"></i>
                            PHP
                        </span>
                        |
                        <span class="badge badge-pill badge-primary">
                            <i class="fab fa-font-awesome"></i>
                            FontAwesome
                        </span>
                        |
                        <span class="badge badge-pill badge-danger">
                            <i class="fas fa-cloud-upload-alt"></i>
                            Netlify
                        </span>
                        |
                        <span class="badge badge-pill badge-danger">
                            <i class="fas fa-cloud-upload-alt"></i>
                            Heroku
                        </span>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3 p-3 text-center">

            <div class="col-12 col-sm-4">
                <div class="my-card-border">
                    <i class="fas fa-laptop-code fa-2x"></i>
                    <h5 class="mt-2 p-2 my-color-2">
                        FrontEnd Development
                    </h5>

                    <p>
                        Creation of static pages like Landing Page,
                        Online Portofolio, Dynamic and API-driven web
                        application. <br></br>
                        Turning Website Designs and Mockups into Code.
                    </p>
                </div>


            </div>



            <div class="col-12 col-sm-4">

                <div class="my-card-border">
                    <i class="fas fa-laptop-code fa-2x"></i>
                    <h5 class="mt-2 p-2 my-color-2">
                        BackEnd Development
                    </h5>
                    <p>
                        Working on the server side of Web applications using server side languages like PHP, Node and Python
                        <br></br>
                        Writing API endpoints and connecting Front End to Databases.
                    </p>
                </div>


            </div>

            <div class="col-12 col-sm-4">

                <div class="my-card-border">
                    <i class="fas fa-cloud-upload-alt fa-2x"></i>
                    <h5 class="mt-2 p-2 my-color-2">
                        Web Deployment
                    </h5>
                    <p>
                        Deploying web development codes to the cloud
                        platforms like GitHub, Netlify, Heroku, Shared Hosting and LAMP.
                        <br></br>
                        Hosting static webpage code on the cloud and
                        WorldWideWeb.
                    </p>
                </div>


            </div>

        </div>

        <div class="row mt-2" id="message-me">
            <div class="col-12 text-center">
                <h4 class="my-color-2 font-weight-bold">
                    Contact Me
                </h4>
            </div>
            <div class="col-12 text-center">
                <div class="my-form-container">
                    <form action="" method="post">
                        <div class="form-group text-left">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>

                        <div class="form-group text-left">
                            <label for="message">Message</label>
                            <textarea class="form-control" name=message rows="3" placeholder="Enter Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>




    </div>

    <footer style="background-color: gray;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center p-3" style="color: black;">
                    <span class="p-3">
                        <a href="https://github.com/JUGG097/react_covid19_dashboard" style="color: black;">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                    </span>
                    <span className="ml-4 mr-4 p-3">
                        <a href="https://www.linkedin.com/in/adeoluwa-adeboye-051057146/" style="color: black;">
                            <i class="fab fa-linkedin-in fa-2x"></i>
                        </a>
                    </span>
                    <span class="p-3">
                        <a href="https://wa.me/+2348102008245?text=I'm%20interested%20in%20Web-Development" style="color: black;">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </span>
                    <p className="mt-4 mb-0">
                        Adeoluwa | Copyright &copy; 2021
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>