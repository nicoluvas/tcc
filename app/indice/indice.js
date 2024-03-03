const button = document.querySelector(".theme");
const banner = document.querySelector("#bg-banner");
const bannerDark = document.querySelector("#bg-banner-dark");
const logo = document.querySelector("#logo");
const logoDark = document.querySelector("#logo-dark");

button.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  toggleMode();
});
function toggleMode() {
  banner.classList.toggle("hidden");
  banner.classList.toggle("shown");
  bannerDark.classList.toggle("hidden");
  bannerDark.classList.toggle("shown");

  logo.classList.toggle("hidden");
  logo.classList.toggle("shown");
  logoDark.classList.toggle("hidden");
  logoDark.classList.toggle("shown");
}
