// Load Facebook SDK for JavaScript
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


// Jquery
$(document).ready(function(){
    
    // Image Hover Effects
    // ===================
    $(".navbar-brand").hover(
        function() {
            $(this).attr("src", "img/logos/prune-logo-hover.png");
        }, 

        function() {
            $(this).attr("src", "img/logos/prune-logo.png");
        }
    )
    
    $("#eight-tracks-img").hover(
        function() {
            $(this).attr("src", "img/album_covers/8_tracks_setlist.jpg");
        }, 

        function() {
            $(this).attr("src", "img/album_covers/8_tracks.jpg");
        }
    )
    
    $("#partly-sunny-img").hover(
        function() {
            $(this).attr("src", "img/album_covers/partly_sunny_setlist.jpg");
        }, 

        function() {
            $(this).attr("src", "img/album_covers/partly_sunny.jpg");
        }
    )
    
    $("#slow-cooker-img").hover(
        function() {
            $(this).attr("src", "img/album_covers/slow_cooker_setlist.jpg");
        }, 

        function() {
            $(this).attr("src", "img/album_covers/slow_cooker.jpg");
        }
    )
});