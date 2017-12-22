
$(function () {
  /*初期表示*/
  $('.company_contents').hide();
  $('.company_contents').eq(0).show();
  $('.company_menu_button').eq(0).addClass('is-active');
  /*クリックイベント*/
  $('.company_menu_button').each(function () {
    $(this).on('click', function () {
      var index = $('.company_menu_button').index(this);
      $('.company_menu_button').removeClass('is-active');
      $(this).addClass('is-active');
      $('.company_contents').hide();
      $('.company_contents').eq(index).show();
    });
  });
});
