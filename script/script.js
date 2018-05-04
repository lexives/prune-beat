// Jquery
$(document).ready(function(){
    
    // Icon Hover Effect
    $(".navbar-brand").hover(
        function() {
            $(this).attr("src", "img/logos/prune-logo-hover.png");
        }, 

        function() {
            $(this).attr("src", "img/logos/prune-logo.png");
        }
    )
    
});