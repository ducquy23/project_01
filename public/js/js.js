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
// function activeProduct() {
//     let product_football = document.querySelectorAll(".item__football");
//     let product__shoes = document.querySelectorAll(".item__shoes");
//     product_football.forEach((item, index) => {
//         item.addEventListener("click", function (item) {
//             item.preventDefault();
//             document.querySelector(".item__football.active").classList.remove("active");
//             this.classList.add("active");
//         })
//     })
//     product__shoes.forEach((item, index) => {
//         item.addEventListener("click", function (item) {
//             item.preventDefault();
//             document.querySelector(".item__shoes.active").classList.remove("active");
//             this.classList.add("active");
//         })
//     })
// }
// activeProduct();
