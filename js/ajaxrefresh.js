
function refresh() {

    

    if($('.people-counter-container').length !== 0){
        console.log('container');
    } else{
        console.log('no container');
    }
     
    $('.page-content').load(window.location.href + ' .page-content');
    /* $('#people-count').load(window.location.href + ' #people-count');
    $('.counter-gender-in').load(window.location.href + ' .counter-gender-in');
    $('.counter-gender-out').load(window.location.href + ' .counter-gender-out'); */
}

