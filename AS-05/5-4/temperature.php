<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion | 5-4 | Ratificar</title>
    <style>
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Temperature Conversion</h1>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
            for ($celsius = 0; $celsius <= 100; $celsius++) 
            {
                $fahrenheit = ($celsius * 9/5) + 32;
                echo "<tr>";
                echo "<td>$celsius</td>";
                echo "<td>$fahrenheit</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>