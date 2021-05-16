/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/terminal.js ***!
  \**********************************/
function terminal() {
  var terminals = document.querySelectorAll('.terminal');
  terminals.forEach(function (el) {
    var command = el.querySelector('.body .command'),
        commandText = command.textContent;
    var answer = el.querySelector('.body .answer');
    command.textContent = '';

    for (var i = 0; i < commandText.length; i++) {
      (function (i) {
        setTimeout(function () {
          command.textContent += commandText[i];

          if (i === commandText.length - 1) {
            setTimeout(function () {
              answer.classList.add('ready');
            }, 1000);
          }
        }, 75 * i);
      })(i);
    }
  });
}

document.addEventListener("DOMContentLoaded", terminal);
/******/ })()
;