<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="DataTables/datatables.min.css" rel="stylesheet" />

  <title>Confrontos Realizados</title>
</head>

<body>
  <section class="confrontos">

    <div class="listagem_confrontos">
      <table id="confrontos_listar" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Data</th>
            <th>Ano</th>
            <th>Competicao</th>
            <th>Mandante</th>
            <th>Gols M</th>
            <th>Gols V</th>
            <th>Visitante</th>
            <th>Estádio</th>
            <th>Ações</th>
          </tr>
        </thead>
      </table>
    </div>

  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="./DataTables/datatables.min.js"></script>

  <!-- Moment.js: -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>

  <!-- Brazilian locale file for moment.js-->
  <script src="https://cdn.datatables.net/plug-ins/2.0.2/sorting/datetime-moment.js"></script>

  <!-- Brazilian locale file for moment.js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/pt-br.js"></script>

  <script>
    $(document).ready(function() {
      $('#confrontos_listar').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'confrontos_listar.php',
      });
    });
  </script>

  <script>
    $.fn.dataTable.moment = function(format, locale) {
      var types = $.fn.dataTable.ext.type;

      // Add type detection
      types.detect.unshift(function(d) {
        return moment(d, format, locale, true).isValid() ?
          'moment-' + format :
          null;
      });

      // Add sorting method - use an integer for the sorting
      types.order['moment-' + format + '-pre'] = function(d) {
        return moment(d, format, locale, true).unix();
      };
    };
  </script>
  </div>
</body>

</html>