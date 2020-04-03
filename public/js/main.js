// Add class to container to show left side
$("#sign-up").click(function() {
  $("#container").addClass("left-panel-active");
});

$("#sign-in").click(function() {
  $("#container").removeClass("left-panel-active");
});

// Change icons on input
// Sign Up elements
$(".signup-user input").focus(function() {
  $(".signup-user .unactive").hide();
  $(".signup-user .active").show();
  $(".signup-user label").css("text-transform", "uppercase");
});
$(".signup-user").focusout(function() {
  $(".signup-user .active").hide();
  $(".signup-user .unactive").show();
  $(".signup-user label").css("text-transform", "none");
});
$(".signup-email input").focus(function() {
  $(".signup-email .unactive").hide();
  $(".signup-email .active").show();
  $(".signup-email label").css("text-transform", "uppercase");
});
$(".signup-email").focusout(function() {
  $(".signup-email .active").hide();
  $(".signup-email .unactive").show();
  $(".signup-email label").css("text-transform", "none");
});
$(".signup-password input").focus(function() {
  $(".signup-password .unactive").hide();
  $(".signup-password .active").show();
  $(".signup-password label").css("text-transform", "uppercase");
});
$(".signup-password").focusout(function() {
  $(".signup-password .active").hide();
  $(".signup-password .unactive").show();
  $(".signup-password label").css("text-transform", "none");
});

// Login elements
$(".login-email input").focus(function() {
  $(".login-email .unactive").hide();
  $(".login-email .active").show();
  $(".login-email label").css("text-transform", "uppercase");
});
$(".login-email").focusout(function() {
  $(".login-email .active").hide();
  $(".login-email .unactive").show();
  $(".login-email label").css("text-transform", "none");
});
$(".login-password input").focus(function() {
  $(".login-password .unactive").hide();
  $(".login-password .active").show();
  $(".login-password label").css("text-transform", "uppercase");
});
$(".login-password").focusout(function() {
  $(".login-password .active").hide();
  $(".login-password .unactive").show();
  $(".login-password label").css("text-transform", "none");
});
