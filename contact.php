<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- <?= time();  ?> -->
    <link rel="stylesheet" href="styles/main.css?v=<?= time();  ?>">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/cc75a31cdc.js"></script>
    <title>Document</title>
    <style>
        body{
            background-image: url("img/backdrop.jpg");
            position: cover;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    
<div class="container">

<!-- Navbar -->
<nav class="row navbar navbar-expand-lg navbar-light bg-white rounded-bottom">
    <a href="#" class="navbar-brand ml-2 resto-tittle">
        <h2>Fin's Cuisine</h2>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-3">
            <li class="nav-item mx-md-2">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item mx-md-2">
                <a href="booking.php" class="nav-link">Reservation</a>
            </li>
            <li class="nav-item mx-md-2">
                <a href="contact.php" class="nav-link active">Contact</a>
            </li>
        </ul>
    </div>
</nav>
</div>


<!-- END Navbar -->

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
                <div class="container">
                <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Contact
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 pl-lg-0">
                            <div class="card card-details mb-5">
                                <div class="row justify-content-center">
                                    <h1 class="mb-5">Find Us!</h1>
                                    <div class="row">                           
                                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                            <span style="font-size:30px;"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                            <p>Jl. Rungkut Asri Timur gg. 13 E-41, <br>Surabaya, <br> Indonesia</p>
                                        </div>

                                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                            <span style="font-size:30px;"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                            <p>Mr. Brown, <br>+62 089 7651 9956, <br> Mon-Fri, 09:00 - 21:00</p>   
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-7 pl-lg-0">
                            <div class="card card-details mb-5">
                                <div class="row">
                                    <h1>Say Hello To Us!</h1>
                                    <p>For further inquiries, please feel free to contact us using the form below. We will get back to you as soon as possible.</p>
                                    <div class="col-lg-12 pl-lg-0">
                                        <form>
                                            <div class="form-group">
                                                <label for="nama">Name</label>
                                                <input type="text" id="nama" class="form-control" placeholder="Name" style="width:100%;">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" placeholder="Email" style="width:100%;">
                                            </div>
                                            <div class="form-group">
                                                <label for="telp">Phone Number</label>
                                                <input type="telp" id="telp" class="form-control" placeholder="Phone Number" style="width:100%;">
                                            </div>
                                            <select class="form-control mb-3"  style="width:100%;">
                                                <option>-- Choose Topics --</option>
                                                <option>Question</option>
                                                <option>Complaint</option>
                                                <option>Suggestion</option>
                                                <option>Other</option>
                                            </select>
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" rows="10" placeholder="Message" style="width:100%;"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send Messages</button>
                                        </form>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- <div class="row">
                    
                    <div class="footer-left">
                        <img src="asset/logo.png">
                        <h3>About <span>Mt. Penanggungan</span></h3>

                        <p class="footer-links">
                            <a href="#">Historical</a>
                            |
                            <a href="#">Place</a>
                            |
                            <a href="#">Contact</a>
                            |
                            <a href="#">Developer Website</a>
                        </p>

                        <p class="footer-company-name">© 2020 Gunung Penanggungan, Indonesia</p>
                    </div>

                    <div class="footer-center">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span>Gunung Penanggungan</span>
                                Trawas, Mojokerto, Jawa Timur, Indonesia</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+62 817-2497-3197</p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href="mailto:support@mt.penanggungan.com">support@mt.penanggungan.com</a></p>
                        </div>
                    </div>
                    <div class="footer-right">
                        <p class="footer-company-about">
                            <span>About Website Developer</span>
                            This site was Develope by Informatics UPN Veteran Jatim</p>
                        <div class="footer-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div> -->
                           
    </section>
    </main>
                    
    <div class="card-footer text-muted">
        <div class="container">
         <p class="text-footer text-center">Copyright 2020 <span> Fin's Cuisine</span> <a href="url" target="_blank">Indonesia</a> | <a1 href="url">Surabaya, Jawa TImur</a1></p>
         
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>