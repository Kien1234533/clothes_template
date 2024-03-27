// loader
let loader = document.querySelector(".preloader");
window.addEventListener("load", () => {
  loader.style.display = "none";
});

// Scroll top
// Xử lí scrolling
let scrollToTopBtn = document.querySelector(".back-to-top");
window.addEventListener("scroll", () => {
  if (document.documentElement.scrollTop > 600) {
    scrollToTopBtn.style.bottom = "15px";
  } else {
    scrollToTopBtn.style.bottom = "-50px";
  }
});

function setStyles(element, styles) {
  for (var property in styles) {
    if (styles.hasOwnProperty(property)) {
      element.style[property] = styles[property];
    }
  }
}

// Header Smooth
let nav = document.querySelector(".header__bot");
let content = document.querySelector(".content");
const navOffSet = nav.offsetTop;
function isDesktop() {
  return window.innerWidth > 764; 
}
if (isDesktop()) {
  window.addEventListener("scroll", () => {
    if (window.scrollY >= navOffSet) {
      nav.classList.add("sticky");
      nav.style.height = "70px";
      setStyles(content, {
        marginTop: "70px",
      });
    } else {
      nav.classList.remove("sticky");
      content.style.marginTop = "0";
      setStyles(nav, {
        height: "80px",
      });
    }
  });
}
