<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="DataTables/datatables.min.css" rel="stylesheet" />

  <title>Document</title>
</head>

<body>
  <div class="listagem_treinadores">
    <table id="treinadores_listar" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Apelido</th>
          <th>Situação</th>
          <th>Treinador</th>
          <th>Estado</th>
          <th>Idade</th>
        </tr>
      </thead>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#treinadores_listar').DataTable({
          processing: true,
          serverSide: true,
          ajax: 'treinadores_listar.php',
        });
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.4/sorting/datetime-moment.js"></script>
    <script>
      $(document).ready(function() {
        $.fn.dataTable.moment('dd, MM , YYYY');
        $('#treinadores').DataTable();
      });
    </script>
  </div>
</body>

</html>