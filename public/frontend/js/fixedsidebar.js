$(function () {
  var sidebar = $('.sideBar');
  var top = sidebar.offset().top - parseFloat(sidebar.css('margin-top'));
  $(window).scroll(function (event) {
    var y = $(this).scrollTop();
    if (y >= top) {
      sidebar.addClass('fixedSide');
    } else {
      sidebar.removeClass('fixedSide');
    }
  });
});