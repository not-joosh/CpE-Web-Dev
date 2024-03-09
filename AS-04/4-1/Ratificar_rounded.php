<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

</head>
<body>
    <div class = "ceil">
        <?php
            $number = 3.7;

            $roundedUp = ceil($number);
            echo "Original number: $number\n";
            echo "Rounded up: $roundedUp\n";
        ?>
    </div>

    <div class = 'floor'>
        <?php
            $roundedDown = floor($number);
            echo "Original number: $number\n";
            echo "Rounded down: $roundedDown\n";
        ?>
    </div>

    <div class = 'round'>
        <?php
            $roundedNumber = round($number);
            echo "Original number: $number\n";
            echo "Rounded: $roundedNumber\n";
        ?>
    </div>
</body>
</html>