<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card | 6-1 | Ratificar</title>
</head>
<body>
    <h1>Credit Card</h1>
    <?php
        $creditCardNumber = "1234-5678-9101-1213";
        echo "Credit Card Number: " . $creditCardNumber . "<br>";
        // Removing the dashes and spaces from the credit card number
        $creditCardNumber = str_replace(['-', ' '], '', $creditCardNumber);

        // Checking if the credit card number is 16 digits long
        if (preg_match('/^\d{16}$/', $creditCardNumber)) 
            echo "TRANSACTION SUCCESSFUL";
        else 
            echo "TRANSACTION FAILED";
    ?>
</body>
</html>