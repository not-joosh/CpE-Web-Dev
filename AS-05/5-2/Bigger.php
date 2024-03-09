<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make it Bigger | 5-2 | Ratificar</title>
</head>
<body>
    <h1>Make it Bigger</h1>
    <p>
        <?php
            $counter = 1;
            do {
                echo '<span style="font-size: ' . $counter . 'px;">' . $counter . '</span><br>';
                $counter++;
            } while ($counter <= 30);
        ?>
    </p>
</body>
</html>