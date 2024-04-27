"use strict";

// new WOW().init();

$(function () {
  $('input').attr('autocomplete', 'off');
});

function openPopup(url, title, width, height) {
  var top = window.screen.height - height;
  top = top > 0 ? top / 2 : 0;

  var left = window.screen.width - width;
  left = left > 0 ? left / 2 : 0;

  return window.open(url, title, `resizable=yes, width=${width}, height=${height}, top=${top}, left=${left}`);
}

// Custom required text field
var elements = document.querySelectorAll("INPUT, SELECT, TEXTAREA");
for (var i = 0; i < elements.length; i++) {
  elements[i].oninvalid = function (e) {
    e.target.setCustomValidity("");
    if (!e.target.validity.valid) {
      e.target.setCustomValidity("ช่องนี้ไม่สามารถเว้นว่างได้");
    }
  };
  elements[i].oninput = function (e) {
    e.target.setCustomValidity("");
  };
}