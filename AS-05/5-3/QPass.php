<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's a Date | 5-3 | Ratificar</title>
</head>
<body>
    <h1>It's a Date</h1>
    <?php
        // Getting the current day of the week
        $currentDay = date("N");
        $currentDayStr = date("l");
        echo "<p> Day: $currentDayStr</p>";

        // Creating Quarantine Pass Variable that will allow people to leave their house with the corresponding
        // rules based on the last digit
        $quarantinePass = 653421; // Replace with your Quarantine Pass Control Number
        // getting the last digit of the quarantine pass
        $lastDigitOfPass = $quarantinePass % 10;

        echo "<p> Quarantine Pass: $quarantinePass </p>";

        // We will make a comparison whether or not they can leave their house based on their quarantine pass and the current day
        if(($lastDigitOfPass % 2 == 0 && $currentDay % 2 == 0) || ($lastDigitOfPass % 2 != 0 && $currentDay % 2 != 0))
        {
            if ($currentDay != 7) // If Sunday, then sit down. No way bruh
                echo "<p> You can leave your house today. </p>";
            else 
                echo "<p> You cannot leave your house today. </p>";
        } 
        else 
            echo "<p> You cannot leave your house today. </p>";
    ?>
</body>
</html>