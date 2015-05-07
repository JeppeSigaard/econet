$('.nav-toggle').click(function(e){
    e.preventDefault();
    $(this).toggleClass('active');
    $('body').toggleClass('menu-active');
});
