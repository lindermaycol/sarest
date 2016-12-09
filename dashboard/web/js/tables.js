<!-- Datatables -->
$(document).ready(function() {

  function generateTable(selector) {
    var table = $(selector).on('xhr.dt', function(e, settings, json, xhr) {
      loadcharts();
    }).DataTable({
      dom: "Blfrtip",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "DisplayLength": 10,
      "pageLength": 10,
      buttons: [{
        extend: "copy",
        className: "btn-sm",
        text: "Copiar"
      }, {
        extend: "csv",
        className: "btn-sm"
      }, {
        extend: "excel",
        className: "btn-sm"
      }, {
        extend: "pdfHtml5",
        className: "btn-sm"
      }, {
        extend: "print",
        className: "btn-sm",
        text: "Imprimir"
      }, ],
      "ajax": "ajax/encuestas.php",
      language: {
        url: 'ajax/Spanish.json'
      },
      "columnDefs": [{
        "targets": -1,
        "data": null,
        "defaultContent": '<button type="button" class="btn btn-default btn-sm fa fa-tachometer"></button>'
      }]

    });

    $(selector+' tbody').on('click', 'button', function() {
      var data = table.row($(this).parents('tr')).data();
      //console.log(data[0]);
    });
  }

  generateTable('#ListSurveys');
});