<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8" />
    <title>Lavora con noi - 3EM Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS via CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome per le icone-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-5MUw1ZQkLPVvvEoZxk+ygBwKJso9BV3yZHTS95zY3oe9ydJ4k1yRrByV1K8G1QSj5QXbK1+2gFHyTvYw1uM7Yg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
      .lilacColour {
        color: #3a4cce;
        border-color: #3a4cce;
      }
      .chevron {
        transition: transform 0.3s ease; 
      }

      .card.expanded .chevron {
        transform: rotate(180deg);
      }
    </style>
  </head>
  <body onload="loadJobApplications()">
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/img/blu.svg" alt="Logo" height="40" />
        </a>
        <a href="http://www.3em.it" class="btn btn-outline-primary">Home</a>
      </div>
    </nav>
      <div id="alertMessage" class="alert alert-primary lilacColour position-fixed start-50 translate-middle-x w-50 text-center mt-2" style="display: none;" role="alert">
        Indirizzo email copiato negli appunti!
      </div>
    <!-- Main Content -->
    <div class="container mt-5 w-75">
     

      <h1 class="mb-4 text-start lilacColour">Lavora con noi</h1>
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
        <span class="fw-medium ms-2 me-2 lilacColour">recruitment@3em.it</span>
        <button
          onclick="copyEmail()"
          class="btn btn-link p-0 lilacColour border-0"
        >
          <i class="fas fa-copy"></i>
        </button>
      </div>
    </div>
    <div class="mx-4">
      <hr class="border-2 lilacColour opacity-100" />
    </div>

    <div>
      <div class="row p-4" id="jobList"></div>
    </div>

    <!-- Bootstrap JS e Popper.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Personalizzato -->
    <script>
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
        fetch("https://tstest.3em.it:4433/api/JobApplication")
          .then((response) => response.json())
          .then((data) => {
            displayJobApplications(data);
          })
          .catch((error) => {
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
            job.description.length > 60
              ? job.description.substring(0, 60) + "..."
              : job.description;

          const cardElement = `
            <div class="col-md-6 col-sm-12 mb-4">
                <div class="card rounded-4 " style="background-color:#E7E7E7;">
                    <div class="p-2 ms-2 d-flex align-items-center border-0">
                        <!-- Bottone Chevron -->
                        <button class="btn btn-link text-decoration-none me-2 toggle-btn" type="button" data-index="${index}">
                            <i class="fas fa-chevron-down fa-lg lilacColour chevron"></i>
                        </button>
                        <h5 class="mb-0">${job.title}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Descrizione: </strong><span id="desc${index}" class="d-block overflow-hidden text-truncate">${shortDescription}</span></p>
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
                    "overflow-hidden",
                    "text-truncate"
                  );
                  otherDescSpan.textContent =
                    jobApplications[otherIndex].description.length > 60 ? jobApplications[otherIndex].description.substring(0, 60) + "...": jobApplications[otherIndex].description; //per descrizione abbreviata
                }
              });

            // Espandere o comprimere la card selezionata
            if (card.classList.contains("expanded")) {
              // Card già aperte, quindi lo comprime
              card.classList.remove("expanded");

              descSpan.classList.add("overflow-hidden", "text-truncate");
              descSpan.textContent =
                jobApplications[index].description.length > 60
                  ? jobApplications[index].description.substring(0, 60) + "..."
                  : jobApplications[index].description;
            } else {
              // Card non aperta, quindi la apre
              card.classList.add("expanded");

              descSpan.classList.remove("overflow-hidden", "text-truncate");
              descSpan.textContent = jobApplications[index].description; // Mostra descrizione completa
            }
          });
        });
      }
    </script>
  </body>
</html>
