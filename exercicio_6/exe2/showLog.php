<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>


    <?php

        $handle = fopen("log.txt", "r");

    ?>
        <table>
            <tr>
                <th>Nome</th>
                <th>Valor 1</th>
                <th>Operação</th>
                <th>Valor 2</th>
                <th>Resultado</th>
            </tr>


            <?php
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $split = explode(",", $line); ?>

                    <tr>
                        <td><?php echo $split[0] ?> </td>
                        <td><?php echo $split[1] ?> </td>
                        <td><?php echo $split[2] ?> </td>
                        <td><?php echo $split[3] ?> </td>
                        <td><?php echo $split[4] ?> </td>
                    </tr>
        <?php
                }
                fclose($handle);
            }

        ?>


</body>

</html>