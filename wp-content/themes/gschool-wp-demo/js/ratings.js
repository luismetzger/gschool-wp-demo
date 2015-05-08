$('input[type="radio"]').on('click', function() {
  var value = $(this).val(),
      ratings = '.ratings-box p';
  $(ratings).html(value);
});