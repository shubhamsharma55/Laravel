/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/base.js ***!
  \******************************/
$(document).ready(function () {
  $("#login_Form_Fm").submit(function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "/login",
      // Adjust the route as per your setup
      data: $(this).serialize(),
      success: function success(response) {
        console.log(response);
      },
      error: function error(response) {
        console.error(response);
      }
    });
  });
});
/******/ })()
;