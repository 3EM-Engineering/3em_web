const home = document.getElementById("home");
const toggleIcon = document.getElementById("toggleIcon");
const navbarLogo = document.getElementById("navbarLogo");
const navbarBtnClose = document.querySelector(".btn-close");
const navbarXL = document.querySelector(".navbarXL");
const mobileNav = document.getElementById("mobileNav");
/* 
-Event listener to the document for the "scroll" event. When the user
scrolls, logo and navbar will be adapted.
-when the ChiSiamo section is visible activate the animation and set the animelock to true, so the
animation che only be started one time
*/
let animelock = true;
document.addEventListener("scroll", (event) => {
  if (window.scrollY >= home.offsetHeight) {
    toggleIcon.classList.remove("invert");
    navbarLogo.src = "assets/img/blu.svg";
    mobileNav.classList.add("navbarSM");
  } else {
    toggleIcon.classList.add("invert");
    navbarLogo.src = "assets/img/bianco.svg";
    mobileNav.classList.remove("navbarSM");
  }

  if (window.scrollY >= home.offsetHeight - 50) {
    navbarXL.classList.add("active");
  } else {
    navbarXL.classList.remove("active");
  }
});

function navBarItemClick(e) {
  document.documentElement.style.scrollBehavior = "auto";
  navbarBtnClose.click();
  setTimeout(() => {
    document.documentElement.style.scrollBehavior = "smooth";
  }, 100);
}

navbarFitScreen(window.innerWidth);

window.addEventListener("resize", function () {
  var w = window.innerWidth;
  navbarFitScreen(w);
});

function navbarFitScreen(w) {
  if (w >= 895) {
    mobileNav.classList.add("d-none");
    navbarXL.classList.remove("d-none");
  } else {
    mobileNav.classList.remove("d-none");
    navbarXL.classList.add("d-none");
  }
}

function doveSiamoCarouselControls() {
  if (doveSiamoCarousel.classList.contains("open")) {
    doveSiamoCarousel.classList.toggle("open");
    carouselControlsButtonUp.classList.add("d-none");
    carouselControlsButtonDown.classList.remove("d-none");
  } else {
    doveSiamoCarousel.classList.toggle("open");
    carouselControlsButtonUp.classList.remove("d-none");
    carouselControlsButtonDown.classList.add("d-none");
  }
}

const data1 = {
  labels: ["IT Service"],
  datasets: [
    {
      label: "3EM",
      data: [20, 80],
      backgroundColor: ["#3a4cce", "rgba(0,0,0,.1)"],
      hoverOffset: 4,
    },
  ],
};
const data2 = {
  labels: ["Erection & System Engineering"],
  datasets: [
    {
      label: "3EM",
      data: [40, 60],
      backgroundColor: ["#4da0f2", "rgba(0,0,0,.1)"],
      hoverOffset: 4,
      rotation: 90
    },
  ],
};
const data3 = {
  labels: ["Industrial automation"],
  datasets: [
    {
      label: "3EM",
      data: [40, 60],
      backgroundColor: ["#3ed29f", "rgba(0,0,0,.1)"],
      hoverOffset: 4,
      rotation: 180
    },
  ],
};

const ctx1 = document.getElementById("myChart1").getContext("2d");
const ctx2 = document.getElementById("myChart2").getContext("2d");
const ctx3 = document.getElementById("myChart3").getContext("2d");
const chart1 = new Chart(ctx1, {
  type: "doughnut",
  data: data1,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
const chart2 = new Chart(ctx2, {
  type: "doughnut",
  data: data2,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
const chart3 = new Chart(ctx3, {
  type: "doughnut",
  data: data3,
  options: {
    plugins: {
      legend: {
        display: false,
      },
    },
  },
});
