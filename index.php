<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">

        <!-- Navbar -->
        <nav class="row navbar navbar-expand-lg navbar-dark bg-danger">
            <a href="#" class="navbar-brand">
                Restoran
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Reservasi</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>    
    </div>

    <!-- Header -->
    <header class="text-center">
            <h1 class="text-white font-weight-bold"> Mau makan? </h1>
            <p class="text-white">Silahkan booking tempat dan pilih menu terlebih dahulu.</p>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>50</h2>
                    <p>Jumlah Meja</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>30</h2>
                    <p>Ditempati</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>5</h2>
                    <p>Direservasi</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>15</h2>
                    <p>Kosong</p>
                </div>
            </section>
        </div>

        <section class="section-popular-food" id="food">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-food-heading">
                        <h2>Makanan Favorit</h2>
                        <p>Beberapa makanan favorit <br>
                            pilihan pelanggan setia kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="foodContent">
            <div class="container">
                <div class="section-popular-image row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-food text-center d-flex flex-column" style="background-image:url('img/soto.png');">
                            <div class="food-name">
                                Soto Ayam
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-food text-center d-flex flex-column" style="background-image: url('img/nasi_goreng.jpg'); ">
                            <div class="food-name">
                                Nasi Goreng
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-food text-center d-flex flex-column" style="background-image:url('img/ayam.jpg');">
                            <div class="food-name">
                                Ayam Goreng
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-food text-center d-flex flex-column" style="background-image:url('img/sate.jpg');">
                            <div class="food-name">
                                Sate Ayam
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>