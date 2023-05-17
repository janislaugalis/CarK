$(function($) {
    $('#accordionArea .accordion-body').hide();
    $('#accordionArea .accordion-heading:first').addClass('active').next().show();
    
    $('#accordionArea .accordion-heading').click(function() {
      if ($(this).next().is(':hidden')) {
        $('#accordionArea .accordion-heading').removeClass('active').next().slideUp();
        $(this).toggleClass('active').next().slideDown();
      }
      return false;
    });
  
    $("select").wrap("<div class='style-select'></div>");
    $('.style-select select').addClass("select");
  });