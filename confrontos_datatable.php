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
                <th>Ano</th>
                <th>Data</th>
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

      <script>
        $(document).ready(function() {
          $('#confrontos_listar').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'confrontos_listar.php',
          });
        });
      </script>
    </div>
</body>

</html>