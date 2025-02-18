<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8" />
  <title>Lavora con noi - 3EM Engineering</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS via CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome per le icone-->
  <!-- Integrity tolto da rigo 18
    integrity="sha512-5MUw1ZQkLPVvvEoZxk+ygBwKJso9BV3yZHTS95zY3oe9ydJ4k1yRrByV1K8G1QSj5QXbK1+2gFHyTvYw1uM7Yg==" -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      background-color: #f8f9fa;
    }

    .job-modal .modal-body {
      max-height: 70vh;
      overflow-y: auto;
    }

    .job-list .card {
      margin-bottom: 1rem;
    }

    .blueColor {
      color: #3a4cce;
      border-color: #3a4cce;
    }

    .chevron {
      transition: transform 0.3s ease;
    }

    .card.expanded .chevron {
      transform: rotate(180deg);
    }

    .navbarXL {
      background: rgba(255, 255, 255, 1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transition: all 350ms ease;
    }

    .navbarSM {
      background: linear-gradient(180deg,
          rgba(255, 255, 255, 0.8519782913165266) 20%,
          rgba(255, 255, 255, 0) 100%);
    }

    .btn-outline {
      border: 2px solid #3a4cce;
      border-radius: 5rem;
      padding: 0.5rem 1rem;
      display: block;
      text-align: center;
      transition: all 50ms ease;
    }

    .btn-outline:hover,
    .btn-outline:focus {
      outline: 5px solid #3a4cce;
      border-radius: 5rem;
      padding: calc(0.5rem - 3px) 1rem;
      display: block;
      text-align: center;
    }

    a {
      text-decoration: none !important;
      color: #3a4cce !important;
      font-family: "Roboto", sans-serif;
    }
  </style>
</head>

<body class="overflow-x-hidden" onload="loadJobApplications()">
  <!-- Navbar -->
  <nav class="navbar fixed-top" id="mobileNav" oncontextmenu="return false">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top" id="navbarLogo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon invert" id="toggleIcon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <a class="navbar-brand" href="#">
              <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top" />
            </a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body position-relative">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="index.php#chiSiamo">Chi Siamo</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="index.php#settori">Settori</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="index.php#collaborazioni">Collaborazioni</a>
            </li>
            <li class="nav-item" onclick="navBarItemClick()">
              <a class="nav-link active" aria-current="page" href="index.php#doveSiamo">Dove Siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="workwithus.php">Lavora con noi</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link active" aria-current="page" href="indexEn.php">
                <img src="assets\img\italy.png" alt="Italian" height="20" class="d-inline-block align-text-top" />
              </a>
            </li>
          </ul>
          <a href="http://app.3em.it/core/login.php" class="btn-outline mt-5 mx-auto col-12 col-md-5">Area Riservata</a>
          <a href="workwithus.php"
            class="rounded-pill px-2 py-2 text-center col-11 col-md-5 mx-0 mt-4 text-light button bg-primary position-absolute shadow"
            style="bottom: 50px">Lavora con noi</a>
        </div>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-light fixed-top navbarXL px-3 justify-content-between" oncontextmenu="return false">
    <a class="navbar-brand" href="#">
      <img src="assets\img\blu.svg" alt="Logo" height="40" class="d-inline-block align-text-top" />
    </a>
    <div class="navbar-body d-flex flex-row">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-flex flex-row">
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.php#chiSiamo">Chi Siamo</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.php#settori">Settori</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.html#collaborazioni">Collaborazioni</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="index.php#doveSiamo">Dove Siamo</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="workwithus.php">Lavora con noi</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="indexEn.php">
            <img src="assets\img\italy.png" alt="Italian" height="20" class="d-inline-block align-text-top" />
          </a>
        </li>
      </ul>
    </div>
    <a href="http://app.3em.it/core/login.php" class="btn-outline">Area Riservata</a>
  </nav>
  <div>
    <div id="alertMessage"
      class="alert alert-primary blueColor position-fixed start-50 translate-middle-x w-50 text-center mt-2"
      style="display: none; z-index: 1031" role="alert">
      Indirizzo email copiato negli appunti!
    </div>
    <!-- Main Content -->
    <div class="container mt-5 w-75 pt-5">


      <h1 class="mb-4 text-start blueColor">Lavora con noi</h1>
      <p class="fw-medium">
        3EM ENGINEERING si presenta come System Integrator e fornitore di
        soluzioni globali per i processi industriali, combinando qualità,
        innovazione, spirito giovane e un forte impegno nella ricerca.
      </p>
      <p class="text-secondary">
        Siamo sempre alla ricerca di persone dinamiche e motivate, pronte a
        mettersi in gioco su progetti stimolanti e di portata internazionale.
        L'azienda valorizza le potenzialità individuali attraverso percorsi
        formativi continui, sia in aula che sul campo.
      </p>

      <div class="mt-5 d-flex justify-content-center align-items-center">
        <p class="fw-medium me-2 mt-3">Contattaci</p>
        <span class="fw-medium ms-2 me-2 blueColor">recruitment@3em.it</span>
        <button onclick="copyEmail()" class="btn btn-link p-0 blueColor border-0">
          <i class="fas fa-copy"></i>
        </button>
      </div>
    </div>
    <div class="mx-4">
      <hr class="border-2 blueColor opacity-100" />
    </div>


    <div id="loading" class="text-center my-3 d-flex justify-content-center align-items-center"
      style="display: none; height: 50vh;">
      <div class="spinner-border text-primary" role="status">
      </div>
    </div>
    <div class="row p-4" id="jobList"></div>

  </div>

  <!-- Bootstrap JS e Popper.js via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/navbarWorkWithUs.js"></script>


  <!-- Script Personalizzato -->
  <script>
    const maxLenght = 250;
    function copyEmail() {
      const email = "recruitment@3em.it";
      navigator.clipboard.writeText(email).then(() => {
        const alert = document.getElementById('alertMessage');

        // Mostra l'alert con effetto fade-in
        alert.style.display = 'block';
        alert.classList.add('fade', 'show'); // Aggiunge le classi fade e show per mostrare l'alert

        // Dopo 3 secondi, inizia la transizione per nascondere l'alert con fade-out
        setTimeout(() => {
          alert.classList.remove('show'); // Rimuove la classe 'show' per il fade-out
          // Dopo il fade-out, nasconde completamente l'alert dopo 0.5 secondi
          setTimeout(() => {
            alert.style.display = 'none'; // Nasconde l'alert completamente dopo la transizione
          }, 500); // Tempo per completare il fade-out
        }, 3000); // Dopo 3 secondi, inizia la transizione di scomparsa
      });
    }

    function loadJobApplications() {
      const loading = document.getElementById("loading");
      loading.style.display = "block";
      fetch("https://tstest.3em.it:4433/api/JobApplication")
        .then((response) => response.json())
        .then((data) => {
          loading.classList.add("d-none")
          loading.style.display = "none";
          displayJobApplications(data);
        })
        .catch((error) => {
          loading.classList.add("d-none")
          loading.style.display = "none";
          console.error("Errore nel recuperare le job applications:", error);
          document.getElementById("jobList").innerHTML =
            '<p class="text-danger">Si è verificato un errore nel caricare le posizioni aperte.</p>';
        });
    }

    function displayJobApplications(jobApplications) {
      const jobList = document.getElementById("jobList");
      jobList.innerHTML = "";

      if (jobApplications.length === 0) {
        jobList.innerHTML =
          '<p class="text-muted d-flex justify-content-center">Al momento non ci sono posizioni aperte.</p>';
        return;
      }

      jobApplications.forEach((job, index) => {
        const shortDescription =
          job.description.length > maxLenght
            ? job.description.substring(0, maxLenght) + "..."
            : job.description;

        const cardElement = `
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card rounded-4 " style="background-color:#E7E7E7;">
                    <div class="p-2 ms-2 d-flex align-items-center border-0">
                        <!-- Bottone Chevron -->
                        <button class="btn btn-link text-decoration-none me-2 toggle-btn" type="button" data-index="${index}">
                            <i class="fas fa-chevron-down fa-lg blueColor chevron"></i>
                        </button>
                        <h5 class="mb-0 blueColor">${job.title}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Descrizione: </strong><span id="desc${index}" class="d-block overflow-hidden ">${shortDescription}</span></p>
                        <p class="card-text"><strong>Requisiti: </strong>${job.requirements}</p>
                        <p class="card-text"><strong>Titolo di Studio: </strong>${job.studyTitle}</p>
                        <p class="card-text"><strong>Esperienza: </strong>${job.experience}</p>
                    </div>
                </div>
            </div>
        `;

        jobList.innerHTML += cardElement;
      });

      //per il chevron
      document.querySelectorAll(".toggle-btn").forEach((btn) => {
        btn.addEventListener("click", function () {
          const index = this.getAttribute("data-index");
          const icon = this.querySelector("i");
          const descSpan = document.getElementById(`desc${index}`);
          const card = this.closest(".card");

          document.querySelectorAll(".toggle-btn")
            .forEach((otherBtn, otherIndex) => {
              const otherIcon = otherBtn.querySelector("i");
              const otherDescSpan = document.getElementById(
                `desc${otherIndex}`
              );
              const otherCard = otherBtn.closest(".card");

              //Chiudere le altre card quando se ne apre una
              if (otherIndex !== parseInt(index)) {
                otherCard.classList.remove("expanded");
                otherDescSpan.classList.add(
                  "overflow-hidden"
                );
                otherDescSpan.textContent =
                  jobApplications[otherIndex].description.length > maxLenght ? jobApplications[otherIndex].description.substring(0, maxLenght) + "..." : jobApplications[otherIndex].description; //per descrizione abbreviata
              }
            });

          // Espandere o comprimere la card selezionata
          if (card.classList.contains("expanded")) {
            // Card già aperte, quindi lo comprime
            card.classList.remove("expanded");

            descSpan.classList.add("overflow-hidden");
            descSpan.textContent =
              jobApplications[index].description.length > maxLenght
                ? jobApplications[index].description.substring(0, maxLenght) + "..."
                : jobApplications[index].description;
          } else {
            // Card non aperta, quindi la apre
            card.classList.add("expanded");

            descSpan.classList.remove("overflow-hidden");
            descSpan.textContent = jobApplications[index].description; // Mostra descrizione completa
          }
        });
      });
    }
  </script>
</body>
</html>