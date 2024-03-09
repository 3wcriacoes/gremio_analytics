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
  <div class="listagem_estados">
    <table id="estados_listar" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Estado</th>
        </tr>
      </thead>
    </table>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#estados_listar').DataTable({
          processing: true,
          serverSide: true,
          ajax: 'estados_listar.php',
        });
      });
    </script>
  </div>
</body>

</html>