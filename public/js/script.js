const list = document.querySelectorAll(".list");

function activeLink() {
  list.forEach((item) => item.classList.remove("active"));
  this.classList.add("active");
}
list.forEach((item) => item.addEventListener("click", activeLink));


// Define animations using Anime.js
var fadeInAnimation = anime({
  targets: '.btn-red span',
  opacity: 1,
  duration: 400, // Duration of the animation
  easing: 'easeInOutQuad', // Easing function
  autoplay: false // Don't autoplay the animation initially
});

// Trigger the animation on button hover
document.querySelector('.btn-red').addEventListener('mouseenter', function() {
  fadeInAnimation.play(); // Play the animation on hover
});

document.querySelector('.btn-red').addEventListener('mouseleave', function() {
  fadeInAnimation.reverse(); // Reverse the animation on mouse leave
});


const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  width: "90vw",
  height: "90vh"
});



function toggleDropdown() {
  var dropdownMenu = document.getElementById("myDropdown");
  if (dropdownMenu.style.display === "block") {
    dropdownMenu.style.display = "none";
  } else {
    dropdownMenu.style.display = "block";
  }
}


function sideBar(){
  const nav = document.getElementById("sideNav");

  nav.classList.add("actv");
document.body.classList.add("overflow-hidden");

}

function closeSidebar() {
  const nav = document.getElementById("sideNav");
  nav.classList.remove("actv");
  document.body.classList.remove("overflow-hidden");
}


$(document).ready(function() {
  // Function to update active class based on current URL
  function updateActiveLink() {
      var path = window.location.pathname;
      $('.navigation ul li').removeClass('active');
      $('.navigation ul li a').each(function() {
          if ($(this).attr('href') === path) {
              $(this).closest('li').addClass('active');
          }
      });
  }

  // Update active class on page load
  updateActiveLink();

  // Update active class when navigating using browser back/forward buttons
  window.addEventListener('popstate', function() {
      updateActiveLink();
  });
});


function opean(){
const bar = document.getElementById('filter');

bar.classList.add("open-sesme");
document.body.classList.add("overflow-hidden");
}

function cloase(){
const bar = document.getElementById('filter');

bar.classList.remove("open-sesme");
document.body.classList.remove("overflow-hidden");
}




