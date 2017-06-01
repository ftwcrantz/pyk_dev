$(document).ready(function() {
  $('#contact-segment').click(function () {
    $('.contact-header').toggleClass('hidden');
    $('.contact-info').toggleClass('hidden');
    $('#footer').toggleClass('hidden');
    $('#contact-segment').toggleClass('hidden-margin');
  });
});