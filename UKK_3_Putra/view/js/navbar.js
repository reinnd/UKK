// hamburger
function toggleNav(){
  const navbar = document.querySelector("nav");
  const mainSec = document.querySelector("main");
  
  navbar.classList.toggle("sidebar-toggle");
  mainSec.classList.toggle("nav-toggle");
}

//dropdown 
function toggleNavDropdown(){
  const dropdown = document.getElementById("dropdown");
  const parentTriger= document.getElementById("dropdown-triger");
  const arrow = document.getElementById("arrow");

  dropdown.classList.toggle("flex");
  parentTriger.classList.toggle("dropdown-active");
  arrow.classList.toggle("arrow-down");
}