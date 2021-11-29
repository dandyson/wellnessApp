/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/assets/js/form-validation.js ***!
  \************************************************/
$(function () {
  'use strict';

  $(document).ready(function () {
    $('.select2').select2({
      placeholder: 'Choose one'
    });
    $('.select2-no-search').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose one'
    });
  });
  $('#selectForm').parsley();
  $('#selectForm2').parsley();
});
/******/ })()
;