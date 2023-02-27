const menu = document.querySelector(".burger");
const ul = document.querySelector("ul");

menu.addEventListener("click", function (e) {
  e.preventDefault();
  menu.classList.toggle("open");
  ul.classList.toggle("open");
});