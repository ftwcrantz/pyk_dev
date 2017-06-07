$(document).ready(function() {
  $('#contact-toggle').click(function () {
    $('.contact-footer').toggleClass('hidden');
    $('.contact-meta').toggleClass('hidden');
    $('.contact-title').toggleClass('hidden');
  });
});