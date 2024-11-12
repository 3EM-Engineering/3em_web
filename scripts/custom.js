// G VARS
var intervalSet;
var backgroundInterval = 0;
var slideIndex = 1;
var slideInterval;
var myimages = new Array()
//SECTION LINGUA
function getLang() {
  var ln = localStorage.getItem("lang");
  if (ln == null) {
    setLang("it");
  }
  else {
    setFlag(ln);
    $.getJSON("resources/language.json", function (data) {
      $.each(data.language[ln], (key, data) => {
        $(key).html(data);
      });
    });
    populateFeed();
  }
}
function setLang(ln) {
  localStorage.removeItem("lang");
  localStorage.setItem("lang", ln);
  getLang();
}
function setFlag(ln) {
  if (ln == "it") {
    document.getElementById("flag").innerHTML = "<img src='images/flag/italy.png'  />";
  }
  else if (ln == "en") {
    document.getElementById("flag").innerHTML = "<img src='images/flag/uk.png'  />";
  }
}
//Section Loader
(function ($) {

  "use strict";

  // PRE LOADER
  $(window).load(function () {

    $('.preloader').fadeOut(1000); // set duration in brackets    
  });

  //Section Menu

  $('.navbar-collapse a').on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });
  if (document.title == "3EM Group") {
    $(window).scroll(function () {
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
      } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
      }
    });
  }
  else {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  }

  // PARALLAX EFFECT
  $.stellar({
    horizontalScrolling: false,
  });

  // SLIDER
  function changeCarouselBackground() {
    let itemActive = document.querySelectorAll('.owl-item.active>.item>h2')[0];
    switch (itemActive.innerHTML) {
      case 'Automotive':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Automotive.png)');
        break;
      case 'Steel':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Steel.jpg)');
        break;
      case 'Oil &amp; Gas':
        $('#referenzeImage').css('background', 'url(images/logos/Background/OilAndGas.jpg)');
        break;
      case 'Renewable Energy':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Energy.jpg)');
        break;
      case 'Energie Rinnovabili':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Energy.jpg)');
        break;
      case 'Transportation':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Transportation.jpg)');
        break;
      case 'Warehouses':
        $('#referenzeImage').css('background', 'url(images/logos/Background/Werehouses.jpg)');
        break;
      case 'Information Technology':
        $('#referenzeImage').css('background', 'url(images/logos/Background/IT.jpg)');
        break;
    }
    $('#referenzeImage').css('background-size', 'cover');
  }
  $('.owl-carousel').owlCarousel({
    items: 1,
    lazyLoad: true,
    loop: true,
    autoplayHoverPause: false,
    autoplay: true,
    smartSpeed: 1000,
  }).on('changed.owl.carousel', function (event) {
    setTimeout(function () { changeCarouselBackground() }, 100);
  });


  // SMOOTHSCROLL

  $(function () {
    $('.custom-navbar a').on('click', function (event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 49
      }, 1000);
      event.preventDefault();
    });
  });

})(jQuery);

// Feed RSS
function populateFeed() {
  var ln = localStorage.getItem("lang");
  $.getJSON('resources/jsonFeed.json', function (data) {
    var index = 1;
    data.content.forEach(dati => {
      //Rss Web
      switch (ln) {
        case "it":
          $('#RSS-Container-' + index).children('#rss-title').html(dati.Title_IT);
          $('#RSS-Container-' + index).find('#rss-p').html(dati.Desc_IT);
          break;
        case "en":
          $('#RSS-Container-' + index).children('#rss-title').html(dati.Title_EN);
          $('#RSS-Container-' + index).find('#rss-p').html(dati.Desc_EN);
          break;
      }
      $('#RSS-Container-' + index).find('#rss-img').attr("src", dati.Pic);

      /*$('#RSS-Container-' + index).mouseenter(function () {
            showElement($(this).children('.rss-inner-container').first().attr('id'));
      });
      $('#RSS-Container-' + index).mouseleave(function () {
            $(this).children('.rss-inner-container').first().addClass("hidden");
            clearInterval(intervalSet);
      });*/

      //Rss Mobile
      switch (ln) {
        case "it":
          $('#RSS-Mobile-Container-' + index).find('#rss-title').html(dati.Title_IT);
          $('#RSS-Mobile-Container-' + index).find('#rss-p').html(dati.Desc_IT);
          break;
        case "en":
          $('#RSS-Mobile-Container-' + index).find('#rss-title').html(dati.Title_EN);
          $('#RSS-Mobile-Container-' + index).find('#rss-p').html(dati.Desc_EN);
          break;
      }
      $('#RSS-Mobile-Container-' + index).find('#rss-img').attr("src", dati.Pic);
      index++;
    });
  });
}

//  Web Feed RSS

function showElement(element) {
  intervalSet = setTimeout("$('#" + element + "').removeClass('hidden')", 200);
}

// Mobile Feed RSS Collapse


function collapseOther(Clicked) {
  if (Clicked != 1) {
    if ($('#collapseOne').hasClass('in')) {
      $('#collapseOne').removeClass('in');
    }
  }
  if (Clicked != 2) {
    if ($('#collapseTwo').hasClass('in')) {
      $('#collapseTwo').removeClass('in');
    }
  }
  if (Clicked != 3) {
    if ($('#collapseThree').hasClass('in')) {
      $('#collapseThree').removeClass('in');
    }
  }
}

//Switch BG
function switchBg() {
  switch (backgroundInterval) {
    case 0:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/Steel.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 1:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/NewOilGas.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 2:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/newIT.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 3:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/Steel2.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 4:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/Automotive.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 5:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/IT.jpeg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval++;
      break;
    case 6:
      $('#overlay-Pic').css('background', 'url(images/Jumbotron/OilGas.jpg)');
      $('#overlay-Pic').css('background-size', 'cover');
      $('#overlay-Pic').css('background-repeat', 'no-repeat');
      backgroundInterval = 0;
      break;
  }
  $('#overlay-Pic').css('transition', 'background-image 1s ease-out;');
}
async function preloadimages(imagesArray) {
  for (i = 0; i < imagesArray.length; i++) {
    myimages[i] = new Image()
    myimages[i].src = imagesArray[i]
  }
}


//SECTION INITIALIZE
async function initialize() {
  let imagesArray = [
    "images/Jumbotron/Steel.jpg",
    "images/Jumbotron/NewOilGas.jpg",
    "images/Jumbotron/Steel2.jpg",
    "images/Jumbotron/Automotive.jpg",
    "images/Jumbotron/IT.jpeg",
    "images/Jumbotron/OilGas.jpg",
    "images/Jumbotron/newIT.jpg"];
  await preloadimages(imagesArray)
    .then(KeepInitializing());
}
async function KeepInitializing() {
  getLang();
  slideInterval = setInterval('MoveInterval', 1000);
  showSlides(slideIndex);
  setInterval('switchBg()', 6000);
}

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("uniSlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {

    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  resetInterval();
}

function resetInterval() {
  clearInterval(slideInterval);
  slideInterval = setInterval('MoveInterval()', 4000);
}
function MoveInterval() {
  var slides = document.getElementsByClassName("uniSlides");
  slideIndex++;
  if (slideIndex > slides.length) { slideIndex = 1 }
  showSlides(slideIndex);
}
