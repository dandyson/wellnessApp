/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/assets/js/table-data.js ***!
  \*******************************************/
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

$(function (e) {
  //file export datatable
  var table = $('#example').DataTable({
    lengthChange: false,
    buttons: ['copy', 'excel', 'pdf', 'colvis'],
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_ '
    }
  });
  table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
  $('#example1').DataTable({
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_'
    }
  });
  $('#example2').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_'
    }
  });
  var table = $('#example-delete').DataTable({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_'
    }
  });
  $('#example-delete tbody').on('click', 'tr', function () {
    if ($(this).hasClass('selected')) {
      $(this).removeClass('selected');
    } else {
      table.$('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });
  $('#button').click(function () {
    table.row('.selected').remove().draw(false);
  }); //Details display datatable

  $('#example-1').DataTable(_defineProperty({
    responsive: true,
    language: {
      searchPlaceholder: 'Search...',
      sSearch: '',
      lengthMenu: '_MENU_'
    }
  }, "responsive", {
    details: {
      display: $.fn.dataTable.Responsive.display.modal({
        header: function header(row) {
          var data = row.data();
          return 'Details for ' + data[0] + ' ' + data[1];
        }
      }),
      renderer: $.fn.dataTable.Responsive.renderer.tableAll({
        tableClass: 'table border mb-0'
      })
    }
  }));
});
/******/ })()
;