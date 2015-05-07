$(function(){

    $('header nav li').on('click',function(){
        $('header nav li').removeClass('current-menu-item');
        $(this).addClass('clicked');
    });

});
