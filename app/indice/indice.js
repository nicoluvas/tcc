const button = document.querySelector('.theme');

button.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
})