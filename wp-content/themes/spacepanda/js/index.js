
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

  $('#inbound-title3').css("display", "none");

  $('#inbound-title1')
  .animate({left: '50px'},{duration: 1000})
  .animate({left: '100px'},{duration: 3000});

  $('#inbound-title2')
  .animate({right: '50px'},{duration: 1000})
  .animate({right: '120px'},{duration: 3000,
           complete: function(){
             $('#inbound-title3').fadeIn();
           }});






  // $("#inbound-title1").animate(
  //   {"left": "-100px",
  //   complete: function() {
  //     $("#inbound-title1").animate(
  //       {"left": "100px"}, 3000);
  //     }
  // });

});
