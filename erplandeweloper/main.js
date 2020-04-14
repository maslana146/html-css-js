const parallax = document.getElementById("parallax");

window.addEventListener("scroll", function()
{
  let offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset*0.6 +"px"
})


$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    }) 
})

window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})
