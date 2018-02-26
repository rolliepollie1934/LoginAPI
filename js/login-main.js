/*
License: This file can only be stored on servers belonging to PraxisBIT
File Name : js/login-main.js
File Description : JS File for login and register forms
Author : Nikhil Jain & Amit Nikam
Creation Date : 11 February 2018
*/
$(document).ready(function() {

  document.getElementById("passwordBtn").style.display = "none";
  document.getElementById("lpassword").style.display = "none";
  document.getElementById("forgotpwrd").style.display = "none";
  document.getElementById("passwordlabel").style.display = "none";

  $("#emailBtn").click(function() {
    var email = $("#lemail").val().trim();
    var lbutton = $("#emailBtn").val();
    $.post("api/logincheck.php", {
      lemail: email,
      emailBtn: lbutton

    }, function(data, status) {
      $("#response").html(data);
    });
  });

  $("#passwordBtn").click(function() {
    var email = localStorage.getItem("email");
    var password = $("#lpassword").val().trim();
    var lbutton = $("#passwordBtn").val();
    $.post("api/logincheck.php", {
      lemail: email,
      lpassword: password,
      passwordBtn: lbutton

    }, function(data, status) {
      $("#response").html(data);
    });
  });
});
