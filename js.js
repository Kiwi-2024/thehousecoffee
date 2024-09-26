var menu = document.getElementById("header");

window.addEventListener("scroll", function() {
  if (window.pageYOffset > 0) {
    menu.style.top = "0";
  } else {
    menu.style.top = "42px";
  }
});
// menu doc 
window.addEventListener('scroll', function () {
  var menu = document.querySelector('.menu');
  if (window.scrollY > 0) {
      menu.classList.add('scrolled');
  } else {
      menu.classList.remove('scrolled');
  }

  if (window.scrollY > 1350) {
      menu.classList.add('scrolled1');
  } else {
      menu.classList.remove('scrolled1');
}
});



const icon_menu = document.querySelector('.menu11');
const menu_an = document.querySelector('.menu_an');
const icon_close = document.querySelector('.icon_close');

icon_close.addEventListener('click', () => {
  menu_an.classList.remove('active');
});

icon_menu.addEventListener('click', () => {
  menu_an.classList.add('active');
});


const voboclogin = document.querySelector('.voboclogin');
const linkdangnhap = document.querySelector('.linkdangnhap');
const linkdangky = document.querySelector('.linkdangky');
const iconclose = document.querySelector('.icon-close');
const btnCuaso = document.querySelector('.btnLogin-popup');
const btnCuaso1 = document.querySelector('.btnLogin-popup1');

//-------------------------------------------------
linkdangky.addEventListener('click', () => {
    voboclogin.classList.add('active2');
});

linkdangnhap.addEventListener('click', () => {
    voboclogin.classList.remove('active2');
});
btnCuaso1.addEventListener('click', () => {
  voboclogin.classList.add('active-popup');
});

btnCuaso.addEventListener('click', () => {
    voboclogin.classList.add('active-popup');
});

iconclose.addEventListener('click', () => {
    voboclogin.classList.remove('active-popup');
});



//------------------------------------1

// Lắng nghe sự kiện click trên các liên kết menu

//vị trí tọa độ


const phoneInput = document.getElementById('registerPhone');
const phoneError = document.getElementById('phoneError');

phoneInput.addEventListener('input', () => {
  const phoneNumber = phoneInput.value.trim();
  if (/^\d{11}$/.test(phoneNumber)) {
    phoneError.textContent = ''; // Xóa thông báo lỗi nếu hợp lệ
  } else {
    phoneError.textContent = 'Số điện thoại không hợp lệ'; // Hiển thị thông báo lỗi
  }
});
