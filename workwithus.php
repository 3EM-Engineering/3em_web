<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Lavora con noi - 3EM Group</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS via CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <!-- Font Awesome per le icone -->
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
    .contact-card {
      max-width: 500px;
      margin: 2rem auto;
    }
    .job-modal .modal-body {
      max-height: 70vh;
      overflow-y: auto;
    }
    .job-list .card {
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/blu.svg" alt="Logo" height="40" />
      </a>
      <a href="http://www.3em.it" class="btn btn-outline-primary">Home</a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container text-center my-5">
    <h1 class="mb-4">Lavora con noi</h1>
    <p class="lead">
      3EM ENGINEERING si presenta come System Integrator e fornitore di soluzioni globali per i processi industriali, combinando qualità, innovazione, spirito giovane e un forte impegno nella ricerca.
  </p>
  <p>
      3EM ENGINEERING è sempre alla ricerca di persone dinamiche e motivate, pronte a mettersi in gioco su progetti stimolanti e di portata internazionale. L'azienda valorizza le potenzialità individuali attraverso percorsi formativi continui, sia in aula che sul campo.
  </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
      <button
        type="button"
        class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#jobModal"
        onclick="loadJobApplications()"
      >
        Posizioni Aperte
      </button>
    </div>
  </div>

  <!-- Contact Card -->
  <div class="card contact-card shadow-sm">
    <div class="card-body text-center">
      <h5 class="card-title">Contattaci</h5>
      <p class="card-text">Per inviare la candidatura, contatta:</p>
      <p class="card-text"><strong>recruitment@3em.it</strong></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button class="btn btn-outline-secondary" onclick="copyEmail()">
          <i class="fas fa-copy me-1"></i> Copia email
        </button>
        <a
          href="mailto:recruitment@3em.it?subject=Candidatura spontanea&body=Gentile 3EM,%0D%0AVorrei candidarmi per eventuali posizioni aperte.%0D%0ACordiali saluti,%0D%0A[Il tuo nome]"
          class="btn btn-primary"
        >
          <i class="fas fa-envelope me-1"></i> Scrivi un'email
        </a>
      </div>
    </div>
  </div>

  <!-- Modal per le Job Applications -->
  <div
    class="modal fade"
    id="jobModal"
    tabindex="-1"
    aria-labelledby="jobModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content job-modal">
        <div class="modal-header">
          <h5 class="modal-title" id="jobModalLabel">Posizioni Aperte</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Chiudi"
          ></button>
        </div>
        <div class="modal-body">
          <!-- Lista delle Job Applications -->
          <div id="jobList" class="job-list"></div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Chiudi
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS e Popper.js via CDN -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  ></script>

  <!-- Script Personalizzato -->
  <script>
    function copyEmail() {
      const email = 'recruitment@3em.it';
      navigator.clipboard.writeText(email).then(() => {
        alert('Indirizzo email copiato negli appunti!');
      });
    }

    function loadJobApplications() {
      fetch('https://tstest.3em.it:4433/api/JobApplication')
        .then((response) => response.json())
        .then((data) => {
          displayJobApplications(data);
        })
        .catch((error) => {
          console.error('Errore nel recuperare le job applications:', error);
          document.getElementById('jobList').innerHTML =
            '<p class="text-danger">Si è verificato un errore nel caricare le posizioni aperte.</p>';
        });
    }

    function displayJobApplications(jobApplications) {
      const jobList = document.getElementById('jobList'); 
      jobList.innerHTML = '';

      if (jobApplications.length === 0) {
        jobList.innerHTML =
          '<p class="text-muted">Al momento non ci sono posizioni aperte.</p>';
        return;
      }

      jobApplications.forEach((job) => {
        const card = document.createElement('div');
        card.className = 'card';

        const cardBody = document.createElement('div');
        cardBody.className = 'card-body';

        const title = document.createElement('h5');
        title.className = 'card-title';
        title.textContent = job.title;

        const description = document.createElement('p');
        description.className = 'card-text';
        description.innerHTML =
          '<strong>Descrizione:</strong> ' + job.description;

        const requirements = document.createElement('p');
        requirements.className = 'card-text';
        requirements.innerHTML =
          '<strong>Requisiti:</strong> ' + job.requirements;

        const studyTitle = document.createElement('p');
        studyTitle.className = 'card-text';
        studyTitle.innerHTML =
          '<strong>Titolo di Studio:</strong> ' + job.studyTitle;

        const experience = document.createElement('p');
        experience.className = 'card-text';
        experience.innerHTML =
          '<strong>Esperienza:</strong> ' + job.experience;

        cardBody.appendChild(title);
        cardBody.appendChild(description);
        cardBody.appendChild(requirements);
        cardBody.appendChild(studyTitle);
        cardBody.appendChild(experience);

        card.appendChild(cardBody);
        jobList.appendChild(card);
      });
    }
  </script>
</body>
</html>
