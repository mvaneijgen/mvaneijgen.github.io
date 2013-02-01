$(function(){
    
    $('aside section a img').mouseenter(function(){
        $('.contents').css('background-image', 'url('+$(this).attr('data-url')+')');
    });
    
});