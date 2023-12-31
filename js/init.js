/*global jQuery*/

jQuery(function ($) {
  "use strict";

  let domain = window.location.hostname;
  console.log("%cJS Initialization", "color:#ffffff; font-weight:bold; font-size: 1.4em");
  console.log("%cinit.js", "color:#00ff00", "-> Loaded on " + domain);

  let currentYear = (new Date).getFullYear();
  $('#copyright.current-year').text(currentYear);

  $('.button.activate-fancy-bg').click(function () {
    let target = $('body');
    target.toggleClass('fancy-bg-active');
    $(this).toggleClass('active');
  });

  let result_container = $('#result_aspectRatio');
  let width = $('#width');
  let height = $('#height');

  updateAspectRatio();

  width.on('input', updateAspectRatio);
  height.on('input', updateAspectRatio);

  function updateAspectRatio() {
    let w = width.val();
    let h = height.val();
    let aspectRatio = getAspectRatio(w, h);
    result_container.text(aspectRatio);
  }

});


function getGreatestCommonDivisor(a, b) {
  if (b === 0) {
    return a;
  }
  return getGreatestCommonDivisor(b, a % b);
}

function getAspectRatio(width, height) {
  let divisor = getGreatestCommonDivisor(width, height);
  return width / divisor + ":" + height / divisor;
}

