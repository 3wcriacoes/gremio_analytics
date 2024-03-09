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
  <div class="listagem_clubes">
    <table id="clubes_listar" class="display" style="width:100%">
      <thead>
        <tr>
          <th>Clube</th>
          <th>Torcida</th>
          <th>Estádio</th>
          <th>Município</th>
          <th>Idade</th>
        </tr>
      </thead>
    </table>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="DataTables/datatables.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#clubes_listar').DataTable({
          processing: true,
          serverSide: true,
          ajax: 'clubes_listar.php',
        });
      });
    </script>
  </div>
</body>

</html>