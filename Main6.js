// MAIN PAGE
window.onload = function() {
  const links = document.querySelectorAll('nav ul div'); // Assuming the navigation links are within a 'nav ul div' structure

  links.forEach(link => {
      link.addEventListener('click', (event) => {
          event.preventDefault();
          const targetId = link.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
          });
      });
  });
};

function toggleSidebar() {
  var sidebar = document.getElementById("mySidebar");
  var overlay = document.getElementById("overlay");
  var body = document.querySelector(".body");
  sidebar.style.left = "0";
  overlay.style.opacity = "0.5";
  body.style.marginLeft = "0";

  
}

function closeSidebar() {
  var sidebar = document.getElementById("mySidebar");
  var overlay = document.getElementById("overlay");
  var body = document.querySelector(".body");

  sidebar.style.left = "-250px";
  overlay.style.opacity = "0"; // Hide overlay
  body.style.marginLeft = "0";
}

document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('nav ul div');

  links.forEach(link => {
      link.addEventListener('click', (event) => {
          event.preventDefault();
          const targetId = link.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);

          window.scrollTo({
              top: targetElement.offsetTop,
              behavior: 'smooth'
          });
      });
  });
});