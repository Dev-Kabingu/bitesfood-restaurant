const burger = document.querySelector(".burger");
const nav_bar = document.querySelector(".nav_bar");

// Initially collapse nav_bar
burger.addEventListener("click", (e) => nav_bar.classList.toggle("active"));

// Remove opened menu if device is resized
const isLargeDevice = window.innerWidth > 768;
window.addEventListener("resize", (e) => isLargeDevice ? nav_bar.classList.remove("active") : null);
