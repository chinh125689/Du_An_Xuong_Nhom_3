// Lấy tất cả các phần tử có class "dropdown"
const dropdowns = document.querySelectorAll('.dropdown');

// Duyệt qua từng phần tử và thêm sự kiện click cho mỗi phần tử
dropdowns.forEach(function(dropdown) {
  dropdown.addEventListener('click', function() {
    dropdown.classList.toggle('active');
  });
});

// Cố định frame đăng kí ngay
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('.form_register').addClass('sticky');
        }
    });
});

window.onscroll = function() {myFunction()};

// Get the navbar
var form_register = document.getElementById("form_register");

// Get the offset position of the navbar
var sticky = form_register.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    form_register.classList.add("sticky")
  } else {
    form_register.classList.remove("sticky");
  }
}