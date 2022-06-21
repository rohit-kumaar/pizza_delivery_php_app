/* This is a function that is listening for the DOM to be ready. */
document.addEventListener("DOMContentLoaded", () => {
  initApp();
});

const initApp = () => {};

// querySelectorAll function
function qsAll(selector, parent = document) {
  return [...parent.querySelectorAll(selector)];
}

// querySelector function
function qs(selector, parent = document) {
  return parent.querySelector(selector);
}

const hamburger = qs(".hamburger");
const hamburgerMenu = qs(".hamburger-menu");
hamburger.addEventListener("click", () => {
  const active = hamburgerMenu.classList.toggle("active");
  if (active) {
    hamburger.classList.add("bx-menu");
    hamburger.classList.remove("bx-x-circle");
  } else {
    hamburger.classList.remove("bx-menu");
    hamburger.classList.add("bx-x-circle");
  }
});
