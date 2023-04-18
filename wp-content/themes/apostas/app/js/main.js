//open mobile menu
let burger = document.getElementById("burger");
burger.addEventListener("click", function (event) {
    event.preventDefault();
    jQuery('#burger span.first').toggleClass('active');
    jQuery('#burger span.second').toggleClass('active');
    jQuery('#burger span.third').toggleClass('active');
    jQuery(".main-navigation").toggleClass('open');
});