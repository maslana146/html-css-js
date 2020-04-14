const parallax = document.getElementById("parallax");

window.addEventListener("scroll", function()
{
  let offset = window.pageYOffset;
  parallax.style.backgroundPositionY = offset*-(0.4) +"px"
})


$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    }) 
})
$(".gallery").magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery:{
    enabled: true
  }
});
window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})