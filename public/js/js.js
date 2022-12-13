let slideIndex = 0;

showSlides();
function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    let i;
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 7000); // Change image every 2 seconds

}

function slideshow() {
    let next = document.getElementById("next");
    let pre = document.getElementById("pre");
    let mainProduct = document.querySelector("#main__topProduct");
    if (next) {
        next.onclick = function () {
            let lists = document.querySelectorAll(".item__product");
            document.querySelector("#main__topProduct").appendChild(lists[0]);
        }
    }
    if (pre) {
        pre.onclick = function () {
            let lists = document.querySelectorAll(".item__product");
            document.querySelector("#main__topProduct").prepend(lists[lists.length - 1]);
        }
    }
    if(mainProduct) {
        setInterval(function () {
            let lists = document.querySelectorAll(".item__product");
            mainProduct.prepend(lists[lists.length - 1]);
        }, 4500);
    }
  

}
slideshow()

$(document).ready(function(){
    $('#main-outstanding__product').slick({
        slidesToShow: 4,
        autoplay:true,
        autoplaySpeed:3500,    
    });
  });
