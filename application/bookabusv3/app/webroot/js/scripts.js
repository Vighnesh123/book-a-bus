$(document).load(function(){
    var x = isNativeApp();
    alert(x);
});

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
    
    $('#dashboard').hover(function (){
        $('#dashboard').attr('src', '/bookabusv3/img/navbar/selected_nav/s-dashboard.jpg');
    },
    function (){
        $('#dashboard').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-dashboard.jpg');
    });
    
    $('#logout').hover(function (){
        $('#logout').attr('src', '/bookabusv3/img/navbar/selected_nav/s-logout.jpg');
    },
    function (){
        $('#logout').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-logout.jpg');
    });
    
    $('#browse').hover(function (){
        $('#browse').attr('src', '/bookabusv3/img/navbar/selected_nav/s-browse.jpg');
    },
    function (){
        $('#browse').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-browse.jpg');
    });
    
    $('#schedule').hover(function (){
        $('#schedule').attr('src', '/bookabusv3/img/navbar/selected_nav/s-sched.jpg');
    },
    function (){
        $('#schedule').attr('src', '/bookabusv3/img/navbar/unselected_nav/u-sched.jpg');
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
    
    $('#register_button').hover(function (){
        $('#register_button').attr('src', '/bookabusv3/img/buttons/reg-hover.png');
    },
    function (){
        $('#register_button').attr('src', '/bookabusv3/img/buttons/reg.png');
    });
    
    $('#login_button').hover(function (){
        $('#login_button').attr('src', '/bookabusv3/img/buttons/login-hover.png');
    },
    function (){
        $('#login_button').attr('src', '/bookabusv3/img/buttons/login.png');
    });
    
    $('#luzon').hover(function (){
        $('#luzon').attr('src', '/bookabusv3/img/text-img/luzon-hover.png');
    },
    function (){
        $('#luzon').attr('src', '/bookabusv3/img/text-img/luzon.png');
    });
    
    $('#visayas').hover(function (){
        $('#visayas').attr('src', '/bookabusv3/img/text-img/visayas-hover.png');
    },
    function (){
        $('#visayas').attr('src', '/bookabusv3/img/text-img/visayas.png');
    });
    
    $('#mindanao').hover(function (){
        $('#mindanao').attr('src', '/bookabusv3/img/text-img/mindanao-hover.png');
    },
    function (){
        $('#mindanao').attr('src', '/bookabusv3/img/text-img/mindanao.png');
    });

    $("#date-input").datepicker();
    $("#birthday-picker").datepicker({ dateFormat: 'yy-m-d', yearRange:"-80:+0"});
    $("#lss-date").datepicker({ dateFormat: 'MM d, yy' });
});

function isNativeApp() {
    return /book-a-bus\/[0-9\.]+$/.test(navigator.userAgent);
}