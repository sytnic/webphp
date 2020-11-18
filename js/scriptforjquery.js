// JavaScript Document
// use jQuery - basic
jQuery("#test1").addClass("highlight");

$("h2").click(function() {
  $(this).text("You clicked me!");
});

$("#test2").click(function() {
  $(this).fadeOut(2000);
});

$("#mainImage").click(function() {
  $(this).fadeOut(2000);
});