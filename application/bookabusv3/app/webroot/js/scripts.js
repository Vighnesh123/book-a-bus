$(window).on('resize load', function() {
    $('body').css({"padding-top": $(".navbar").height() + "px"});
});

$(document).ready(function(){
    $('#home').hover(function (){
        $('#home').attr('src', '/bookabusv3/img/navbar/selected_nav/s-home.jpg');
    },
    function (){
        $('#home').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-home.jpg');
    });
    
    $('#browse').hover(function (){
        $('#browse').attr('src', '/bookabusv3/img/navbar/selected_nav/s-browse.jpg');
    },
    function (){
        $('#browse').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-browse.jpg');
    });
    
    $('#contact').hover(function (){
        $('#contact').attr('src', '/bookabusv3/img/navbar/selected_nav/s-contact.jpg');
    },
    function (){
        $('#contact').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-contact.jpg');
    });
    
    $('#register').hover(function (){
        $('#register').attr('src', '/bookabusv3/img/navbar/selected_nav/s-register.jpg');
    },
    function (){
        $('#register').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-register.jpg');
    });
    
    $('#login').hover(function (){
        $('#login').attr('src', '/bookabusv3/img/navbar/selected_nav/s-login.jpg');
    },
    function (){
        $('#login').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-login.jpg');
    });
});