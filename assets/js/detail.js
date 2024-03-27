//Tăng giảm số lượng
let reduce = document.getElementById("minimize");
let inputQuantity = document.getElementById("quantity");
let quantity = parseInt(document.getElementById("quantity").value);

const handlePlus = () => {
  quantity += 1;
  inputQuantity.value = quantity;
};
const handleReduce = () => {
  if (quantity > 1) {
    quantity -= 1;
  }
  inputQuantity.value = quantity;
};

// Image Grallery
let imgFull = document.getElementById("imgParent");
imgFull.classList.add("loading");
let thumbnails = document.querySelectorAll(".thumbnail");
let img_left = document.querySelector(".i-left");
let img_right = document.querySelector(".i-right");

let currentIndex = 0;

// Hàm để cập nhật nguồn của hình lớn dựa trên chỉ số
function updateImage(index) {
  imgFull.src = thumbnails[index].src;
}
// Bắt sự kiện khi nhấn nút "Trước"
img_left.addEventListener("click", function () {
  currentIndex = currentIndex === 0 ? thumbnails.length - 1 : currentIndex - 1;
  updateImage(currentIndex);
});

// Bắt sự kiện khi nhấn nút "Tiếp"
img_right.addEventListener("click", function () {
  currentIndex = currentIndex === thumbnails.length - 1 ? 0 : currentIndex + 1;
  updateImage(currentIndex);
});
// Bắt sự kiện khi nhấn vào một hình nhỏ
thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener("click", function () {
    currentIndex = index;
    updateImage(currentIndex);
  });
});

//tab
const tabTitle = document.querySelector(".tab-title"),
  tabContent = document.querySelector(".tab-content");
const tabClick = (element) => {
  let activeE = tabTitle.querySelector(".active");
  let activeT = tabContent.querySelector(".active");
  let elementName = element.getAttribute("name");
  let displayTab = tabContent.querySelector(`#${elementName}`);

  activeE.classList.remove("active");
  activeT.classList.remove("active");
  element.classList.add("active");
  displayTab.classList.add("active");
};
