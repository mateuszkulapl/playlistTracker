/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/app-document-end.js ***!
  \******************************************/
Livewire.on('toast', function (msg) {
  var toast = document.getElementById('toast-template').content.cloneNode(true);
  var randomIdString = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  toast.firstElementChild.id = randomIdString;
  toast.querySelector('.toast-msg').innerText = msg;
  document.getElementById('toasts').appendChild(toast);
  setTimeout(function () {
    document.getElementById(randomIdString).remove();
  }, 3000);
});
/******/ })()
;