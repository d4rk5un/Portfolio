$('[data-toggle="tooltip"]').tooltip();

//Smooth scrolling
$(function() {
  $('a[href*="#"]:not([href="#experience"], [href="#skills"], [href="#summary"], [href="#highlights"], [href="#education"], [href="#gym"], [href="#cycling"], [href="#camera"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 75
        }, 1000);
        return false;
      }
    }
  });
});


//form validation
$("form").submit(function (e){
  // e.preventDefault();

var error = "";

if ($("#message").val() == "") {
  error += "The message field is required.<br>";
}

if ($("#email").val() == "") {
  error += "The email field is required.<br>";
}

if ($("#subject").val() == "") {
    error += "The subject field is required.<br>"
}

if ($("#name").val() == "") {
  error += "The name field is required.<br>";
}

if(error != ""){
  $("#error").html('<div class ="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
  return false;
}

else {
  return true;
}
});


$(function(){
    $('.carousel').carousel({
      interval: 2000
    });
});
