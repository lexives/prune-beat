$(document).ready(function(){
    // ON LOAD
    // =======
    $("#page-body").load("views/home.html");
    
    
    // NAVIGATION
    // ==========
    // Change to Home page
    $(".navbar-brand").click(function(){
        $("#page-body").load("views/home.html");
    });
    
    // Change to About page
    $("#about-nav").click(function(){
        $("#page-body").load("views/about.html");
    });
    
    // Change to Music page
    $("#music-nav").click(function(){
        $("#page-body").load("views/music.html");
    });
    
    // Change to Videos page
    $("#videos-nav").click(function(){
        $("#page-body").load("views/videos.html");
    });
    
    // Change to Shop page
    $("#shop-nav").click(function(){
        $("#page-body").load("views/shop.html");
    });
    
    // Change to Contact Us page
    $("#contact-nav").click(function(){
        $("#page-body").load("views/contact.html");
    });
});