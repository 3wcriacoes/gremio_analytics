<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="DataTables/datatables.min.css" rel="stylesheet" />

  <title>Estádios</title>
</head>

<body>
  <div class="listagem_estadios">
    <table id="estadios_listar" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Apelido</th>
          <th>Proprietário</th>
          <th>Estado</th>
          <th>Situação</th>
          <th>Fundação</th>
        </tr>
      </thead>
    </table>
 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="DataTables/datatables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#estadios_listar').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'estadios_listar.php',
      });
    });
  </script>
 </div>
</body>

</html>