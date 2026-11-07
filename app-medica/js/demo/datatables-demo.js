// Tabla de pacientes con DataTables en español
$(document).ready(function() {
  $('#dataTable').DataTable({
    language: {
      search: "Buscar:",
      lengthMenu: "Mostrar _MENU_ registros",
      info: "Mostrando _START_ a _END_ de _TOTAL_ pacientes",
      infoEmpty: "Sin registros",
      infoFiltered: "(filtrado de _MAX_ en total)",
      zeroRecords: "No se encontraron pacientes",
      paginate: { first: "Primero", last: "Último", next: "Siguiente", previous: "Anterior" }
    }
  });
});
