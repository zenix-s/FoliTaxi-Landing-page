const mobileCloseHeader = document.querySelector(".mobile-close-header");
const header = document.querySelector("header");
mobileCloseHeader.addEventListener("click", () => {
  header.classList.toggle("active");
});
