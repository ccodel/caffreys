// Close any Bootstrap alerts after 4 seconds
$(document).ready(function() {
  setTimeout(function() {
    $(".alert").alert('close');
  }, 4000);
});
