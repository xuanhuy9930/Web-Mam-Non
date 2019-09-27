// sticky
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header3");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
// menu-srp
var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        } 
      });
    }
// slide khóa học
  jQuery(document).ready(function($) {
$('.khoa-hoc').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});
// slide đồ chơi
jQuery(document).ready(function($) {
$('.do-choi').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});
/* menu responsive*/
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
// Back to top

window.onscroll = function() { scrollFunction() };

function scrollFunction() {
  if (window.pageYOffset > 450) {
    document.getElementById("back-to-top").style.opacity = "1";
    document.getElementById("social-btns").style.opacity = "1";
  } else {
    document.getElementById("back-to-top").style.opacity = "0";
    document.getElementById("social-btns").style.opacity = "0";
  }
};

document.getElementById("back-to-top").addEventListener("click", backToTop);
function backToTop() {
  window.scrollTo(0, 0);
};