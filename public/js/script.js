$(function() {
    
    //Close Window
    $('.close-window').click(function () {
        window.open('about:blank', '_self').close();
    });

    //browser back
    $('.back').click(function () {
        history.back();
    });

});

