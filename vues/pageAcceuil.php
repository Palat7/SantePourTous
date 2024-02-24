<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i04FZ5L5nfsO6AvmokBP4tuKKA8fNEH+9QF2t4E+Em/kisjFQV5trn2x4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../AccueilGeneral/pageAcceuil.css">

    <link rel="stylesheet" href="<?php echo DOSSIER_BASE_LIENS;?>AccueilGeneral/pageAcceuil.css" />


    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<!--
    <style>


        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            box-sizing: border-box;
            background-color: #ecf0f1;
            padding-top: 70px;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #ffffff;
            color: #020202;
            padding: 15px 20px;
            text-align: center;
            z-index: 1000;
            font-weight: 500;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;

        }

        header .logo {
            font-weight: bold;
            font-size: 17px;
            color: #020202;
            text-decoration: none;
            box-shadow: 0 2px 5px black, 0 0 10px greenyellow;
        }

        nav > div:first-child {
            flex: 1;
            display: flex;
            justify-content: center;
        }



        nav a {
            color: #020202;
            text-decoration: none;
            padding: 10px 15px;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav .nav1:hover {
            background-color: #3cbfe7;
            color: black;
            text-decoration: underline;

        }

        .button {
            background-color: #3cbfe7;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #c0ae67;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 5px;
            z-index: 1;
        }

        .dropdown-content a {
            color: #020202;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dropdown-content a:hover {

            color: #3cbfe7;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .c-item {
            height: 720px

        }


        .c-img {
            height: auto;
            object-fit: cover;
            filter: brightness(0.6);
        }

        button:focus, input:focus, textarea:focus {
            outline: 0;
        }

        body {
            background: #57bc90;
        }

        .service_wrapper {
            padding: 80px 0;
            color: #030c06;
        }

        .head_text {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .mt_30 {
            margin-top: 30px;
        }

        .button i {
            margin-right: 5px;
            margin-left: 5px
        }

        .service_box {
            background: #d7dd35;
            padding: 45px 30px;
            border-radius: 10px;
            border: 1px solid transparent;
            transition: .3s;
            height: 100%;
        }

        .service_box:hover {
            border: 4px solid #031f42;
            transform: translateY(-10px);
        }

        .service_box h2 {
            font-size: 30px;
            font-weight: 600;
            margin: 30px 0 20px 0;
        }

        .service_box p {
            font-size: 14px;
            line-height: 26px;
        }


        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 30px 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 0;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 20px;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: #3498db;
        }

        .pricing-section {
            background-color: #DDD0C8;
            padding: 50px 0;
            text-align: center;
            color: #fff;
        }

        .pricing-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .pricing-item {
            flex: 1;
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .pricing-item:hover {
            transform: translateY(-5px);
        }

        .pricing-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #3498db;
        }

        .pricing-price {
            font-size: 36px;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 20px;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            color: #555;
        }

        .pricing-features li {
            margin-bottom: 10px;
        }

        .pricing-section .pricing-item .pricing-features li{
            text-align: left;
        }

        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 0 40px;

        }

        .container .image{
            margin-top: 200px;
        }

        .container .image img{
            width: 40vw;
        }

        .container .content{
            margin-top: -100px;
            padding-left: 100px;
        }

        .container .content h1{
            font-size: 80px;
            animation:fadeIn 1s linear backwards;
        }

        .container .content h3{
            font-size: 44px;
            font-weight: 400;
            animation:fadeIn 1s linear backwards;
            animation-delay: .2s;
        }

        .container .content p{
            color: #ffffff;
            font-size: 15px;
            padding: 20px 0;
            animation:fadeIn 1s linear backwards;
            animation-delay: .3s;
        }

        .container .content button{
            outline: none;
            border: none;
            border-radius: 50px;
            background-color: #213F99;
            color: #dddddd;
            font-size: 17px;
            height: 40px;
            width: 180px;
            cursor: pointer;
            transition: .2s;
            animation:fadeIn 1s linear backwards;
            animation-delay: .6s;
        }

        .container .content button:hover{
            opacity: .8;
            color: #3cbfe7;
            letter-spacing: 2px;
        }

        .ham-btn{

            font-size: 30px;
            color: #ffffff;
            display: none;
            cursor: pointer;
        }



    </style>

    -->

</head>
<body>

<header class="head">
    <nav>
        <a class="logo" href="#">  SANTÉPOURTOUS</a>
        <div >
            <a class="nav1" href="#tarifs">Tarifs</a>
            <a class="nav1" href="#service">Services</a>
            <a class="nav1" href="#patient">About</a>
        </div>
        <div>
            <div class="dropdown">
                <a href="#" class="button"><i class="fas fa-user"></i>Connexion <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="pageConnexionPatient.php">Patient</a>
                    <a href="pageConnexionMedecin.php">Medecin</a>

                    <!--Ajouté le 2024-02-23 -->

                    <a href="?action=seConnecterClinique">Clinique</a>

                </div>
            </div>
            <a href="pageCreeationCompte.php" class="button">Créer un compte</a>
        </div>
        <div class="ham-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>

</body>
<section>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="img/photo3.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">Bienvenue merci bye</p>
                    <h1 class="display-1 fw-bolder text-capitalize">hello wolrd</h1>
                    <a href="creationtComptePatient.js"> <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Prendre un rendez-vous</button></a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="img/photo1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="text-uppercase fs-3 mt-5">Lorem ipsum dolor sit amet</p>
                    <p class="display-1 fw-bolder text-capitalize">Lorem ipsum dolor </p>
                    <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                            data-bs-target="#booking-modal">Prendre un rendez-vous</button>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="img/photo1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                <div class="carousel-caption top-0 mt-4">
                    <p class="text-uppercase fs-3 mt-5">kwento mecdivo iset</p>
                    <p class="display-1 fw-bolder text-capitalize">lopseum iranou discote pius </p>
                    <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
                            data-bs-target="#booking-modal">Prendre un rendez-vous</button>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                    <div class="service_box">
                        <span><img class="img-fluid" src="img/icon02.png" alt=""></span>
                        <h2>SERVICE 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                    <div class="service_box">
                        <span><img class="img-fluid" src="img/icon03.png" alt=""></span>
                        <h2>SERVICE 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-10 mt_30">
                    <div class="service_box">
                        <span><img class="img-fluid" src="img/icon03.png" alt=""></span>
                        <h2>SERVICE 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
            <h3 class="pricing-title">Soins de saté mental</h3>
            <p class="pricing-price">$50</p>
            <ul class="pricing-features">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    Lorem ipsum dolor sit amet</li>

            </ul>
        </div>

        
        <div class="pricing-item">
            <h3 class="pricing-title">Consultation médicsl</h3>
            <p class="pricing-price">$80</p>
            <ul class="pricing-features">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    Lorem ipsum dolor sit amet</li>

            </ul>
        </div>
        <div class="pricing-item">
            <h3 class="pricing-title">Diagnostique et traitement</h3>
            <p class="pricing-price">$50</p>
            <ul class="pricing-features">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magnat</li>

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
            <a href="connexionPatient.html"><button> Connecter vous</button></a>
        </div>
        <div class="image">

            <img src="img/photo2.avif" >


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

</html>
