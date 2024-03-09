<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OddEven.php | LE5-1 | Ratificar</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #FF0000; 
            color: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Odd Numbers</th>
            <th>Even Numbers</th>
        </tr>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 1) {
                echo "<tr><td>$i</td><td></td></tr>";
            } else {
                echo "<tr><td></td><td>$i</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>