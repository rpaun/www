$(document).ready(function(e){
    logger("salutari primordiale!");
    resizeHeader();
    $(window).resize(function(){
        resizeHeader();
    });
});
function logger(s){
    console.log(s);
}
function resizeHeader(){
    var h = $(window).height() + 'px';
    //logger('window height: ' + h)
    $('#header').css({'height' : h});    
}

function initMap() {
    var my_location = {lat: 44.412445, lng: 26.152154};
    var map = new google.maps.Map(document.getElementById('map-wrapper'), {
        zoom: 17,
        center: my_location
    });
    var marker = new google.maps.Marker({
        position: my_location,
        map: map
    });
}
function scrollToDiv(id) {
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}