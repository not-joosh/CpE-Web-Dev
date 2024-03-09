<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratificar | 4-3</title>
</head>
<body>
    <?php
        $number = 1234567.89;

        // Format number with default settings
        $formattedNumber = number_format($number);
        echo "<div class='formatted-number'>Formatted Number (Default): $formattedNumber</div>\n";

        // Format number with specified decimal precision and thousands separator
        $formattedNumber = number_format($number, 2, '.', ',');
        echo "<div class='formatted-number'>Formatted Number (2 decimal places, dot as decimal separator, comma as thousands separator): $formattedNumber</div>\n";

        // Format number with specified decimal precision, thousands separator, and prefix/suffix
        $formattedNumber = number_format($number, 2, '.', ',');
        $formattedNumber = '$' . $formattedNumber . ' USD';
        echo "<div class='formatted-number'>Formatted Number (2 decimal places, dot as decimal separator, comma as thousands separator, with prefix and suffix): $formattedNumber</div>\n";

        // Format number without thousands separator
        $formattedNumber = number_format($number, 2, '.', '');
        echo "<div class='formatted-number'>Formatted Number (2 decimal places, dot as decimal separator, without thousands separator): $formattedNumber</div>\n";
    ?>
</body>
</html>