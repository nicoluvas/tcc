$('.form-container > button').click(function() {
    $(this).children('i').toggleClass(['fa-sun', 'fa-moon']);
    $('body#login').toggleClass('dark-mode');
});
