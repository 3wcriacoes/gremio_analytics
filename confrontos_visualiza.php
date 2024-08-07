<?php
include_once "conn.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Consulta de Confrontos cadastrados</title>
    <script type="text/javascript" src="./js/jquery-1.4.4.min.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
    <script type="text/javascript" language="javascript" src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script type="text/javascript" language="javascript" src="cdn.datatables.net/plug-ins/2.0.8/sorting/datetime-moment.js"></script>

    <link rel="stylesheet" href="./css/consulta_confrontos.css" />

    <link href="DataTables/datatables.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>

<body>
    <section class="cadastros">
        <div class="lista_confrontos">
            <p><strong>CONFRONTOS CADASTRADOS</strong></p>
            <section class="confrontos">

                <div class="listagem_confrontos">
                    <table id="confrontos_visualiza_listar" class="display" style="width:100%">
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

            <script>
                $(document).ready(function() {
                    $.fn.dataTable.moment('DD/MM/YYYY HH:mm');
                    $('#confrontos_listar').DataTable();
                });
            </script>
        </div>
</body>

</html>