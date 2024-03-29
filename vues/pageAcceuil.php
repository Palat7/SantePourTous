<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i04FZ5L5nfsO6AvmokBP4tuKKA8fNEH+9QF2t4E+Em/kisjFQV5trn2x4" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/pageAcceuil.css">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
</head>
<body>
    <header class="head">
        <nav>
            <a class="logo" href=""> SANTÉPOURTOUS</a>
            <div>
                <a class="nav1" href="#tarifs">Tarifs</a>
                <a class="nav1" href="#service">Services</a>
                <a class="nav1" href="#patient">About</a>
            </div>
            <div>
                <div class="dropdown">
                    <a href="#" class="button"><i class="fas fa-user"></i>Connexion <i class="fas fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href='?action=pageConnexionPatient'>Patient</a>
                        <a href="?action=pageConnexionMedecin">Medecin</a>


                        <a href="?action=seConnecterClinique">Clinique</a>
                    </div>
                </div>
                <a href="?action=pageCreationCompte" class="button">Créer un compte</a>
            </div>
            <div class="ham-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>

    <section>
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="img/photo3.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="mt-5 fs-3 text-uppercase">Bienvenue merci bye</p>
                        <h1 class="display-1 fw-bolder text-capitalize">hello wolrd</h1>
                        <a href="creationtComptePatient.js">
                            <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Prendre un rendez-vous</button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="img/photo1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="text-uppercase fs-3 mt-5">Lorem ipsum dolor sit amet</p>
                        <p class="display-1 fw-bolder text-capitalize">Lorem ipsum dolor </p>
                        <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                                data-bs-target="#booking-modal">Prendre un rendez-vous
                        </button>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="img/photo1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="text-uppercase fs-3 mt-5">kwento mecdivo iset</p>
                        <p class="display-1 fw-bolder text-capitalize">lopseum iranou discote pius </p>
                        <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                                data-bs-target="#booking-modal">Prendre un rendez-vous
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="service">
        <div class="service_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="head_text">Nos services</h2>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                        <div class="service_box">
                            <span><img class="img-fluid" src="img/icon01.png" alt=""></span>
                            <h2>SERVICE 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                        <div class="service_box">
                            <span><img class="img-fluid" src="img/icon02.png" alt=""></span>
                            <h2>SERVICE 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                        <div class="service_box">
                            <span><img class="img-fluid" src="img/icon03.png" alt=""></span>
                            <h2>SERVICE 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                        <div class="service_box">
                            <span><img class="img-fluid" src="img/icon03.png" alt=""></span>
                            <h2>SERVICE 4</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-section" id="tarifs">
        <h2 class="head_text">Tarifs</h2>
        <div class="pricing-container">

            <div class="pricing-item">
                <h3 class="pricing-title">Soins de santé mental</h3>
                <p class="pricing-price">$50</p>
                <ul class="pricing-features">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        Lorem ipsum dolor sit amet
                    </li>

                </ul>
            </div>


            <div class="pricing-item">
                <h3 class="pricing-title">Consultation médical</h3>
                <p class="pricing-price">$80</p>
                <ul class="pricing-features">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        Lorem ipsum dolor sit amet
                    </li>

                </ul>
            </div>
            <div class="pricing-item">
                <h3 class="pricing-title">Diagnostique et traitement</h3>
                <p class="pricing-price">$50</p>
                <ul class="pricing-features">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magnat
                    </li>

                </ul>
            </div>

        </div>
    </section>
    <section class="patient" id="patient">

        <div class="container">
            <div class="content">
                <h1>PATIENT</h1>
                <h3>hello world</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                <a class="btn btn-primary" href="?action=pageConnexionPatient">Connectez-vous</a>
            </div>
        </div>

    </section>

    <footer>
        <div class="footer">
            <p>&copy; 2023 SANTÉPOURTOUS. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

        </div>

    </footer>
</body>
</html>
