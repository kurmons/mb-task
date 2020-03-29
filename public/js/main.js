// Add class to container to show left side
$("#sign-up").click(function() {
  $("#container").addClass("left-panel-active");
});

$("#sign-in").click(function() {
  $("#container").removeClass("left-panel-active");
});

// Change icons on input
$(".user input").focus(function() {
  $(".user .unactive").hide();
  $(".user .active").show();
  $(".user label").css("text-transform", "uppercase");
});

$(".user").focusout(function() {
  $(".user .active").hide();
  $(".user .unactive").show();
  $(".user label").css("text-transform", "none");
});

$(".email input").focus(function() {
  $(".email .unactive").hide();
  $(".email .active").show();
  $(".email label").css("text-transform", "uppercase");
});

$(".email").focusout(function() {
  $(".email .active").hide();
  $(".email .unactive").show();
  $(".email label").css("text-transform", "none");
});

$(".password input").focus(function() {
  $(".password .unactive").hide();
  $(".password .active").show();
  $(".password label").css("text-transform", "uppercase");
});

$(".password").focusout(function() {
  $(".password .active").hide();
  $(".password .unactive").show();
  $(".password label").css("text-transform", "none");
});
