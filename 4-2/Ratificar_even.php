<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function checkEvenOdd($number) {
            if (is_numeric($number)) 
            {
                $roundedNumber = round($number);
                $isEven = ($roundedNumber % 2 == 0);

                if ($isEven) 
                    echo "The number $number is even.";
                else 
                    echo "The number $number is odd.";
            }
            else 
                echo "The variable '$number' does not contain a valid number.";
        }
        $number1 = 42; 
        $number2 = 67; 
        $number3 = "abc";
        checkEvenOdd($number1);
        checkEvenOdd($number2);
        checkEvenOdd($number3);
    ?>
</body>
</html>