bars = document.querySelector(".fa-bars");
xmark = document.querySelector(".fa-xmark");
var navbar = document.querySelector("nav");
var up = document.querySelector(".up");
header = document.querySelector("header")
menu = document.querySelector(".menu");

console.log(bars)

bars.addEventListener("click", function(){
    menu.style.left = "0px";
    bars.style.display = "none";
    xmark.style.display = "block"
})
xmark.addEventListener("click", function(){
    menu.style.left = "-330px";
    bars.style.display = "block";
    xmark.style.display = "none"
})



var oxirgiScroll;

window.addEventListener("scroll", () => {
  var boshScroll = document.documentElement.scrollTop || window.pageYOffset;
//   if (boshScroll > oxirgiScroll) {
//     navbar.style.background = "#3358fd"
//   } else {
//     navbar.style.background = "black";
//   }
  oxirgiScroll = boshScroll;

  if (boshScroll > 50) {
    navbar.style.background = "#3358fd"
    up.style.display = "flex";
  } else {
    navbar.style.background = "rgba(0, 0, 0, 0.5)";
    up.style.display = "none";
  }
});


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
  });

  var typed = new Typed('#element', {
    strings: ['Buyuk marralarga erishamiz!', 'Baland choqqilarga chiqamiz!', "Ulkan kelajakni quramiz!"],
    typeSpeed: 100,
    loop: true,
});