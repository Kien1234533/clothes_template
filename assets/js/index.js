
let list = document.querySelector(".content__banner--list");
let items = document.querySelectorAll(
  ".content .content__banner--list .list-item"
);
let dots = document.querySelectorAll(".content .content__banner--dots li");
let prev = document.querySelector(
  ".content .content__banner--button button#prev"
);
let next = document.querySelector(
  ".content .content__banner--button button#next"
);

let active = 0;
let lengthItems = items.length - 1;
next.addEventListener("click", () => {
  if (active + 1 > lengthItems) {
    active = 0;
  } else {
    active += 1;
  }
  reloadSlider();
});

prev.addEventListener("click", () => {
  if (active - 1 < 0) {
    active = lengthItems;
  } else {
    active -= 1;
  }
  reloadSlider();
});

let refreshSlider = setInterval(() => {
  next.click();
}, 5000);
let reloadSlider = () => {
  let checkLeft = items[active].offsetLeft;
  list.style.left = -checkLeft + "px";
  let lastActiveDot = document.querySelector(
    ".content .content__banner--dots .active"
  );
  lastActiveDot.classList.remove("active");
  dots[active].classList.add("active");
  clearInterval(refreshSlider);
  refreshSlider = setInterval(() => {
    next.click();
  }, 5000);
};

dots.forEach((element, key) => {
  element.addEventListener("click", () => {
    active = key;
    reloadSlider();
  });
});

// Slick slider
$(document).ready(function () {
  $(".content__featured--list").slick({
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 764,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});