jQuery('document').ready(function ($) {

    var nr = 1;

    /* Inimesi */
    setInterval(function () {

        $('#counter').load(window.location.href + ' #counter');
        $('.counter-gender-in').load(window.location.href + ' .counter-gender-in');
        $('.counter-gender-out').load(window.location.href + ' .counter-gender-out');

        console.log('Counter Updated! ' + nr);
        nr++;


    }, 5000);


});