window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    var topOffset = window.pageYOffset || document.documentElement.scrollTop;
  
    if (topOffset > 100) {
      header.classList.add('visible');
    } else {
      header.classList.remove('visible');
    }
  });
  
  function toggleInfo() {
    var infoElement = document.getElementById("info");
    if (infoElement.style.display === "block") {
      infoElement.style.display = "none";
    } else {
      infoElement.style.display = "block";
    }
  }

  function email() {
    var infoElement = document.getElementById("email-info");
    if (infoElement.style.display === "block") {
      infoElement.style.display = "none";
    } else {
      infoElement.style.display = "block";
    }
  }

  function api() {
    var infoElement = document.getElementById("api-info");
    if (infoElement.style.display === "block") {
      infoElement.style.display = "none";
    } else {
      infoElement.style.display = "block";
    }
  }

  function job() {
    var infoElement = document.getElementById("job-info");
    if (infoElement.style.display === "block") {
      infoElement.style.display = "none";
    } else {
      infoElement.style.display = "block";
    }
  }