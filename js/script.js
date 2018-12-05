$(document).ready( function () {
    $('#finaldata').DataTable({
      scrollY: 400,
      scrollX: true,
      paging: false,
      dom: 'Bfrtip',
      buttons: [
          'csv',
          'excel'
      ]
    });
} );