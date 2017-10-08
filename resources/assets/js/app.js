
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

function tooltipInit() {
    $('[data-toggle="tooltip"]').tooltip({
        container : 'body',
        delay: {show: 100, hide: 200}
    });
}
function panelAnimate() {
    var delay = 50;
    $("#load .panel").each(function(){
        $(this).css('animation-delay', delay+'ms');
        delay += 50;
    });
}
function getContents(url) {
    $.ajax({
        url : url,
        beforeSend: function(){
            pageHide();
        }
    }).done(function (data) {
        $('.main-content').html(data);
        pageInit();
    });
}
function pageHide() {
	$('#browser-loader').show();
	$('#load').toggleClass('invisible');
}
function pageInit() {
    $('#browser-loader').hide();
    tooltipInit(); 
    panelAnimate();
}
$(function() {
    pageInit();
    $(".search").on( "submit", function(e){
        e.preventDefault();
        forms = $(".search");
        $.ajax({
            method: "POST",
            url: "{{ url('search') }}",
            data: forms.serialize(),
            beforeSend: function(){
                pageHide();
            }
        })
        .done(function(data) {
            $('.main-content').html(data);
            pageInit();
        });
    });
    $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');  
        getContents(url);
        window.history.pushState("", "", url);
    });
});