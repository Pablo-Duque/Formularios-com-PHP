document.addEventListener("DOMContentLoaded", function () {
  let menu = document.querySelector(".menu");
  let itens = document.querySelector(".itens");
  let overlay = document.querySelector(".overlay");

  menu.addEventListener("click", OpenMenu);

  function OpenMenu() {
    menu.classList.toggle("close");
    itens.classList.toggle("show");
    overlay.classList.toggle("show");
  }

  overlay.addEventListener("click", CloseMenu);

  function CloseMenu() {
    menu.classList.remove("close");
    itens.classList.remove("show");
    overlay.classList.remove("show");
  }
  }
);