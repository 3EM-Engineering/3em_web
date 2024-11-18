<?php
// Inizio della pagina PHP
ob_start(); // Avvia il buffer di output per evitare problemi di cache

// Il resto del codice PHP della tua pagina
?>
<!DOCTYPE html>
<html lang="en">

<head dir="ltr" lang="it">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="favicon_package/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_package/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_package/favicon-16x16.png">
  <link rel="manifest" href="favicon_package/site.webmanifest">
  <link rel="mask-icon" href="favicon_package/safari-pinned-tab.svg" color="#5085ff">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">

  <meta name="msapplication-wide310x150logo" content="./favicon_package/android-chrome-512x512.png" />
  <meta name="msapplication-square310x310logo" content="./favicon_package/android-chrome-512x512.png" />
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="bb34c6">

  <meta name="description" content="3EM ENGINEERING">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="3EM ENGINEERING">
  <html prefix="og: http://ogp.me/ns#">

  </html>
  <meta property="og:title" content="3EM ENGINEERING" />
  <title>3EM ENGINEERING</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


<body>
  <a class="close-navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></a>

  <nav class="navbar fixed-top" id="mobileNav" oncontextmenu="return false">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets\img\bianco.svg" alt="Logo" height="40" class="d-inline-block align-text-top" id="navbarLogo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon invert" id="toggleIcon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <a class="navbar-brand" href="#">
              <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top">
            </a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body position-relative">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#chiSiamo">Chi Siamo</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#settori">Settori</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#collaborazioni">Collaborazioni</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#doveSiamo">Dove Siamo</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="#contattaci">Contatti</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="indexEn.php">
                <img src="assets\img\italy.png" alt="Italian" height="20" class="d-inline-block align-text-top">
              </a>
            </li>
          </ul>
          <a href="http://app.3em.it/core/login.php" class="btn-outline mt-5 mx-auto col-12 col-md-5">Area Riservata</a>
          <a href="workwithus.php"
            class="rounded-pill px-2 py-2 text-center col-11 col-md-5 mx-0 mt-4 text-light button bg-primary position-absolute shadow"
            style="bottom: 50px;">Lavora con noi</a>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-light fixed-top navbarXL px-3 justify-content-between" oncontextmenu="return false">
    <a class="navbar-brand" href="#">
      <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top">
    </a>
    <div class="navbar-body d-flex flex-row">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-flex flex-row">
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#chiSiamo">Chi Siamo</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#settori">Settori</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#collaborazioni">Collaborazioni</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#doveSiamo">Dove Siamo</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#contattaci">Contatti</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="workwithus.php">Lavora con
            noi</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="indexEn.php">
            <img src="assets\img\italy.png" alt="Italian" height="20" class="d-inline-block align-text-top">
          </a>
        </li>
      </ul>
    </div>
    <a href="http://app.3em.it/core/login.php" class="btn-outline">Area Riservata</a>
  </nav>

  <section class="container-fluid flex-column" id="home">
    <div class="row mx-4">
      <img src="assets/img/bianco.svg" alt="3EM Engineering" height="150%"  style="z-index: 99;">
      <span class="col-12 home-subtitles mt-3"></span>
    </div>
    <div class="row home-button-row" style="z-index: 99;">
      <div class="col-12">
        <a href="#chiSiamo">
          <i class="fa-solid fa-chevron-down"></i>
        </a>
      </div>
    </div>
    <div id="particles-js"></div>
  </section>

  <section class="container px-4 px-md-auto" id="chiSiamo">
    <div class="col-12 section-mini-title">chi siamo</div>
    <div class="row position-relative">
      <div class="col-12 section-title">ottimizziamo e velocizziamo</div>
    </div>
    <div class="row mt-4">
      <div class="col-12">Da oltre 30 anni <b>3EM Engineering</b> è attiva nel settore industriale del montaggio e manutenzione
        meccanica
        ed elettrica, ingegneria di macchinari e sistemi nel settore Automotive, Oil & Gas e Steel. Inoltre, <b>3EM Engineering</b>
        si
        propone come partner per lo sviluppo di soluzioni complete e professionali nel campo dell'Information
        Technology.Supporto a livello mondiale per tutti i nostri clienti fornendo assistenza on site e da remoto.
      </div>
    </div>
    <div class="row align-items-center justify-content-center mt-5">
      <a href="#settori" class="btn-outline mx-auto col-8 col-md-5">Scopri i nostri serivizi</a>
    </div>
    <div class="row cs-data my-5 px-5">
      <div class="data col-6 col-md-4">
        <div class="position-relative">
          <span class="data-perc">20%</span>
          <canvas id="myChart1" style="width:100%;max-width:700px"></canvas>
        </div>
        <span>IT Service</span>
      </div>
      <div class="data col-6 col-md-4">
        <div class="position-relative">
          <span class="data-perc">40%</span>
          <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
        </div>
        <span>Erection & System Engineering</span>
      </div>
      <div class="data col-12 col-md-4">
        <div class="position-relative">
          <span class="data-perc">40%</span>
          <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
        </div>
        <span>Industrial Automation</span>
      </div>
    </div>
    <div class="col-12 mt-5"><b>3EM Engineering</b> è un partner strategico per miglioramenti tecnologici avanzati per innovare
      impianti e
      processi, garantendo
      la consegna puntuale dei progetti e la totale certezza dei costi di investimento.</div>
    <div class="row">
      <div class="col-12 section-mini-title mt-5 mb-3">Le figure di riferimento</div>
      <div class="col-12 row ">
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #3a4cce;">
              <img src="assets/img/MarcoEsposito.png" alt="" height="100">
            </div>
            <a href="https://www.linkedin.com/in/marco-esposito-16397713/" class="image-icon"><i
                class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Marco Esposito</span>
            <span class="role">CEO</span>
          </div>
        </div>
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #ce3a3a;">
              <img src="assets/img/Antonio Leone.jpg" alt="" height="135">
            </div>

            <a href="https://www.linkedin.com/in/ingantonioleone/" class="image-icon"><i
                class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Antonio Leone</span>
            <span class="role">Erection & System Engineering Department</span>
          </div>
        </div>
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #3a4cce;">
              <img src="assets/img/Gattor.jpg" alt="" height="100">
            </div>
            <a href="" class="image-icon"><i class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Gattor Giuseppe Ernesto</span>
            <span class="role">Automation Department</span>
          </div>
        </div>
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #ce3a3a;">
              <img src="assets/img/Francesca.jpg" alt="" height="100">
            </div>
            <a href="https://www.linkedin.com/in/francesca-scarmozzino-38041b13b/" class="image-icon"><i
                class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Francesca Scarmorzino</span>
            <span class="role">Finance & Administration Department</span>
          </div>
        </div>
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #3a4cce;">
              <img src="assets/img/Ilaria.jpg" alt="" height="120">
            </div>
            <a href="https://www.linkedin.com/in/ilaria-scamardella-hrit/" class="image-icon"><i
                class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Ilaria Scamardella</span>
            <span class="role">Human Resource Department</span>
          </div>
        </div>
        <div
          class="team-container d-flex flex-column align-items-center justify-content-start justify-content-md-center col-6 col-md-4 mb-3">
          <div class="position-relative">
            <div class="image" style="background-color: #ce3a3a;">
              <img src="assets/img/Rita.jpg" alt="" height="160">
            </div>
            <a href="" class="image-icon"><i class="fa-brands fa-linkedin"></i></a>
          </div>
          <div class="d-flex flex-column">
            <span class="name">Rita Miglietta</span>
            <span class="role">Logistic Department</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container px-4 px-md-auto" id="settori">
    <div class="col-12 section-mini-title">Settori</div>
    <div class="row position-relative">
      <div class="col-12 section-title">Di cosa ci occupiamo</div>
    </div>
    <div class="row justify-content-start justify-content-md-center">

      <div class="col-12 col-md-8 col-xl-4 card-settori">
        <div class="card-body bg-black">
          <div class="card-text">
            <h2>Industrial Automation</h2>
            <span>
              3EM Engineering fornisce servizi di automazione, nonché ingegneria, per una vasta gamma di impianti industriali.
              L'automazione e l'impianto vengono progettati e testati qualitativamente presso i nostri centri
              produttivi. <div class="d-flex flex-wrap">

                <div class="slider_tech">
                  <div class="slide-track_tech">
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/GeDigital_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Emerson-Electric-Logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/ABB-Logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Rockwell_Automation_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Schneider_Electric.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Siemens-logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/wonderware_avea_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" style="border-radius: 5px;" src="./images/Automation/TIA-Portal.png"
                        alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/controlexpert-logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/factorytalk.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" style="border-radius: 10px;"
                        src="./images/Automation/STUDIO-5000-LOGIX-DESIGNER.jpg" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/GeDigital_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Emerson-Electric-Logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/ABB-Logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Rockwell_Automation_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Schneider_Electric.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/Siemens-logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/wonderware_avea_logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" style="border-radius: 5px;" src="./images/Automation/TIA-Portal.png"
                        alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/controlexpert-logo.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" src="./images/Automation/factorytalk.png" alt="" />
                    </div>
                    <div class="slide_tech">
                      <img draggable="false" style="border-radius: 10px;"
                        src="./images/Automation/STUDIO-5000-LOGIX-DESIGNER.jpg" alt="" />
                    </div>
                  </div>

                </div>
              </div>
            </span>
          </div>
          <img
            src="https://media.istockphoto.com/id/846859964/it/foto/robot-saldatura-in-una-fabbrica-di-automobili.jpg?s=612x612&w=0&k=20&c=WRxnBOY1RXL7uYwAAdQuLKZnsvfz50Ob-s3MKZm4RDg="
            alt="">
        </div>
      </div>

      <div class="col-12 col-md-8 col-xl-4 card-settori card-erection position-relative">
        <a href="assets/certification/Certificato ISO 45001.pdf"
          class="d-flex align-items-center justify-content-center position-absolute z-3 certification rounded-pill shadow">
          <div class="text-primary me-3">Certificati ISO 45001</div>
          <div class="overflow-hidden rounded-pill" style="width: 40px; aspect-ratio: 1/1;">
            <img src="assets/certification/Certificato ISO 45001_page-0001.jpg" alt="" width="50px">
          </div>
        </a>
        <div class="card-body bg-black">
          <div class="card-text">
            <h4>Erection & System Engineering</h4>
            <span>
              3EM Engineering opera in tutto il mondo offrendo una gamma completa di servizi legati al MEIP (Meccanici,
              Elettrici, Strumentali, Piping) installazioni per impianti industriali.
              <div class="d-flex flex-wrap">
                <div class="card-icon">
                  <img draggable="false" src="./images/SystemEngineering/autocad.png" alt="" />
                </div>
              </div>
            </span>
          </div>
          <img
            src="https://media.gettyimages.com/id/510162486/it/foto/linea-di-produzione-di-industria-della-plastica.jpg?s=612x612&w=gi&k=20&c=-nZmg1jQFK2csFAajomTCVHbP-3iMpB9OhKTERNHqno="
            alt="">
        </div>
      </div>

      <div class="col-12 col-md-8 col-xl-4 card-settori">
        <div class="card-body bg-black">
          <div class="card-text">
            <h2>IT Services</h2>
            <span>
              3EM Engineering si propone come partner per lo sviluppo e testing di soluzioni complete e servizi professionali nel
              campo dell'Information Technology proponendo un’offerta multidisciplinare e presenza sul territorio. <div
                class="d-flex flex-wrap">
                <div class="carousel-container">
                  <div class="slider_tech">
                    <div class="slide-track_tech">
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/java.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/angular.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/c.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/nodejs.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/Typescript_logo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/JavaScript-logo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/html_logo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/sqlimage.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/pl-sql.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/phpLogo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/magento-logo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/springLogo.png" alt="" />
                      </div>
                      <div class="slide_tech">
                        <img draggable="false" src="./images/IT/hibernate-logo.svg" alt="" />
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </span>
          </div>
          <img
            src="https://media.istockphoto.com/id/1197640540/photo/website-design-developing-programming-and-coding-technologies.jpg?s=612x612&w=0&k=20&c=6MbZ4JlFFtOKvQYHxNwvOC59W_25FCBgMiGJEz-B9rs="
            alt="">
        </div>
      </div>

    </div>
  </section>

  <section class="container px-4 px-md-auto mt-5" id="collaborazioni">
    <div class="col-12 section-mini-title">Partner</div>
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="./images/logos/Automotive/Comau.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Automotive/ENG.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Automotive/FCA.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Automotive/Tesla.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Energia/CET.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/IT/Accenture.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/IT/NTT.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/OilGas/Canon.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/OilGas/Eni.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/OilGas/Remazel.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/OilGas/Saipem.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Steel/AccVenete.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Steel/Arc.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Steel/Danieli.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Transportation/Bertolotti.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Transportation/Hitachi.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/Transportation/RFI.png" height="100" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="container px-4 px-md-auto mt-5" id="collaborazioni">
    <div class="col-12 section-mini-title">University</div>
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="./images/logos/University/Federico2.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Galvani.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/MarieCurie.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/politorino.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Righi.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Tassinari.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/unisa.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/univanvitelli.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Federico2.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Galvani.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/MarieCurie.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/politorino.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Righi.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/Tassinari.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/unisa.png" height="100" alt="" />
        </div>
        <div class="slide">
          <img src="./images/logos/University/univanvitelli.png" height="100" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="container px-4 px-md-auto mt-5" id="sponsor">
    <div class="col-12 section-mini-title">Sponsor</div>
    <div class="row unina_section align-items-center justify-content-center justify-content-md-between">
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh; opacity: 90%;" data-instgrm-permalink="https://www.instagram.com/p/C3qB8tFqCxc/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C3qB8tFqCxc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Visualizza questo post su Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C3qB8tFqCxc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Un post condiviso da TRE EMME ENGINEERING (@3emengineering)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh; opacity: 0;" data-instgrm-permalink="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by TRE EMME ENGINEERING (@3emengineering)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh;  opacity: 90%;" data-instgrm-permalink="https://www.instagram.com/p/CtgYezZroSD/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CtgYezZroSD/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CtgYezZroSD/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by UniNa Corse (@uninacorseteam)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
    </div>

    <div class="row mt-2 canoa_section align-items-center justify-content-center justify-content-md-between">
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh;  opacity: 90%;" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C_6YRS3uGQx/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C_6YRS3uGQx/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Visualizza questo post su Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C_6YRS3uGQx/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Un post condiviso da European Canoe Association (@canoe.europe)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh;  opacity: 0;" data-instgrm-permalink="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CpKXvhUKVNk/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by TRE EMME ENGINEERING (@3emengineering)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
      <blockquote class="instagram-media col-6 col-md-4 m-0" style="height: 50vh;  opacity: 90%;" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C9hojTVqXkj/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C9hojTVqXkj/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Visualizza questo post su Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C9hojTVqXkj/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Un post condiviso da TRE EMME ENGINEERING (@3emengineering)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>    </div>
  </section>

  <section class="container px-4 px-md-auto mt-5" id="sponsor">
    <div class="col-12 section-mini-title">Collaborazioni</div>
  </section>

  <section class="container px-4 px-md-auto" id="doveSiamo">
    <div class="my-5 row position-relative">
      <div class="col-12 section-title">Dove trovarci</div>
    </div>

    <div class="row">
      <div class="col-12 col-md-5">
        <div class="col-12">
          <div class="row mb-5">
            <div class="col-12 mb-3">
              <span class="fw-bold fs-3 mb-2">Sede Legale</span>
              <div class="text-secondary"><i class="fa-solid fa-location-arrow"></i> Via A.Gramsci, 14 - Castello di
                Cisterna (NA) - 80030</div>
            </div>
            <div class="col-12 mb-3">
              <span class="fw-bold fs-3 mb-2">Sede Operativa</span>
              <div class="text-secondary"><i class="fa-solid fa-location-arrow"></i> Via Antiniana, 2/g - Pozuoli (NA) -
                80078</div>
              <div class="text-secondary"><i class="fa-solid fa-phone"></i> +39 081 5703404</div>
              <a href="mailto:info@3em.it" class="text-primary"><i class="fa-solid fa-envelope"></i> info@3em.it</a>
            </div>
          </div>
        </div>
        <div class="col-12">
          <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6037.92330165819!2d14.154641!3d40.828806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133b0ef3b7f756c3%3A0xe22a75dfd86d8356!2sVia%20Antiniana%2C%202g%2C%2080078%20Pozzuoli%20NA!5e0!3m2!1sit!2sit!4v1689928014507!5m2!1sit!2sit"
            width="100%" style="border:0; height: 20vh; max-height: 350;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-12 col-md-7">
        <div style="overflow: hidden; height: 100%"
          class="col-12 d-flex align-items-center justify-content-center rounded-4 shadow">
          <!-- <video muted playsinline disablepictureinpicture height="100%" autoplay>
            <source src="assets/video/IMG_2668.mp4">
          </video> -->
          <img style="width: 100%; object-fit: cover;" src="assets/img/3EM.jpg">
        </div>
      </div>
    </div>
  </section>

  <section class="container px-4 px-md-auto" id="contattaci">
    <div class="row align-items-center justify-content-start">
      <div class="col-12 col-md-3 section-title">contattaci</div>
      <a href="http://www.3em.it/website/workwithus.php"
        class="shadow-sm rounded-pill py-2 text-center col-5 col-md-2 mx-0 ms-3 mt-4 mt-md-0 text-light button bg-primary">Lavora
        con noi</a>
    </div>
    <div class="row mt-4 justify-content-center">
      <div class="col-12 col-md-10">
        <form id="form" class="needs-validation">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailinput" placeholder="email@esempio.com" name="email"
              required>
            <label for="emailinput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="nomeInput" placeholder="Nome e Cognome" name="nome"
              required>
            <label for="nomeInput">Nome e Cognome</label>
          </div>
          <div class="row mt-5 mx-1">
            <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn-outline mx-auto col-8 col-md-5 btnForm">Invia</button>
        </form>
      </div>
  </section>

  <!-- 
       \\
       (o>
   \\_//)
    \_/_)
     s_|_      SM - MDM - VL
  -->

  <script src="scripts/anime.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="scripts/main.js"></script>
  <script src="js/particles.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<footer class="text-center text-white">
      <section class="col-12">
        <a class="btn btn-outline-light rounded-pill m-1" href="https://www.instagram.com/3emengineering/" role="button"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-outline-light rounded-pill m-1" href="https://www.linkedin.com/company/3em-engineering" role="button"><i class="fab fa-linkedin-in"></i></a>
      </section>
</footer>

</html>
<?php
// Fine della pagina PHP
ob_end_flush(); // Invia tutto il buffer di output al browser
?>