// Jquery
$(document).ready(function(){
    
    // Image Hover Effects
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