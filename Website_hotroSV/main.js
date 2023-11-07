// $('#menu > li').hover(function() {
//     // khi thẻ menu li bị hover thì drop down menu thuộc thẻ li đó sẽ trượt xuống(hiện)
//     $('.dropdown', this).slideDown();
// },function() {
//     // khi thẻ menu li bị out không hover nữa thì drop down menu thuộc thẻ li đó sẽ trượt lên(ẩn)
//     $('.dropdown', this).slideUp();
// });

$('.dropdown > a').click(function() {
    $(this).parent().siblings().find('div').fadeOut('500');
    $(this).next('div').stop(true, false, true).fadeToggle('500');
    return false;
});