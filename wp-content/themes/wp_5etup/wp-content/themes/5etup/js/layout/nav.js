// alert("JS Nav loaded!");

function nav() {
    document.getElementById("main-nav").classList.add('active');
    // document.getElementById("body").classList.add('active-nav');
    document.getElementById("main-content").classList.add('active-nav');

    var delay = "0";

    var menuItems = document.getElementById("main-nav").querySelectorAll('li');
    menuItems.forEach((item, index) => {
        item.classList.add('active');
        delaySec = index * 0.05;
        delay = delaySec + "s";
        item.style.transitionDelay = delay;
    });

}

function closeNav() {
    // document.getElementById("main-nav").style.transition = "5s";
    
    var menuItems = document.getElementById("main-nav").querySelectorAll('li');
    menuItems.forEach((item, index) => {
        item.classList.remove('active');
    });

    document.getElementById("main-nav").classList.remove('active');
    document.getElementById("main-content").classList.remove('active-nav');
}


// TEMP 
/*
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    // var brand = slides.getAttribute("data-brand");
    // alert(brand);
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    var brand = slides[i].getAttribute("data-brand");
    // alert(brand);
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
*/

/*
var brandSlidesCol = document.querySelectorAll(".slideshow.brand");
brandSlidesCol.forEach((brandSlideCol, index) => {

    brandSlides();
    var slideIndex = 0;

    function brandSlides() {
        var brand = brandSlideCol.getAttribute('data-brand');
        var slidesPrefix = "brandslides ";
        var slides = slidesPrefix + brand;
        var brandSlides = document.getElementsByClassName(slides);
    
        for ($i = 0; $i < brandSlides.length; $i++) {
            brandSlides[$i].style.display = "none";
            console.log($i);
        }
    
        // slideIndex++;
        // if (slideIndex > brandSlides.length) {slideIndex = 1}
        // brandSlides[slideIndex-1].style.display = "block";
        // console.log("Script"); // Till here
        // setTimeout(brandSlides, 2000); // Change image every 2 seconds
    }
});
*/