const button = document.querySelector('.theme');
const banner = document.querySelector('#bg-banner');
const bannerDark = document.querySelector('#bg-banner-dark');

button.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  banner.classList.toggle('hidden');
  bannerDark.classList.toggle('hidden');
});