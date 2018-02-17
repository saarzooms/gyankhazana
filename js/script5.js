$(document).ready(function()
	{ 
  $.get("header.html", function(data) {
    $("#header").html(data);
  });
  $.get("footer_pg.html", function(data) {
    $("#footer1").html(data);
  });
     $.get("subject.html", function(data) {
    $("#subjects").html(data);
  });
   $.get("test.html", function(data) {
    $("#test").html(data);
  });
   $.get("parents.html", function(data) {
    $("#parents").html(data);
  });
}); 