<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Book | 7-3 | Ratificar</title>
    <style>
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .addressbook {
            margin-bottom: 20px;
        }

        .addressbook h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .addressbook hr {
            margin-bottom: 10px;
        }

        .addressbook .member {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .addressbook .member p {
            margin: 0;
        }

        .addressbook .member form {
            margin-top: 10px;
        }

        .addressbook .member form input[type="submit"] {
            padding: 5px 10px;
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .addressbook .member form input[type="submit"]:hover {
            background-color: #d32f2f;
        }

        .form-container {
            display: flex;
            flex-direction: horizontal;
            align-items: center;
            margin-top: 20px;
        }

        .form-container form {
            width: fit-content;
            height: 90%;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            margin: 0 1.2rem;
        }

        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container p {
            margin: 0;
        }

        .form-container .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <main>
        <?php
        // Starting session
        session_start();
        // Display the Address book
        if (isset($_SESSION['address_book'])) {
            echo '<div class="addressbook">'; // Add the opening div tag with classname
            echo "<h2>Address Book</h2>";
            echo "<hr>";
            echo '</div>'; // Add the closing div tag
        }
        // This PHP script is for specifically for handling the creation of new members
        if (!isset($_SESSION['address_book'])) {
            // Initialize address book array
            $_SESSION['address_book'] = [];
        }

        // Check if form is submitted for creating new member
        if (isset($_POST['create_member'])) {
            // Get form data
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phone_number'];

            // Create new member array
            $newMember = [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'address' => $address,
                'phone_number' => $phoneNumber
            ];

            // Add new member to the address book array
            $_SESSION['address_book'][] = $newMember;
            // Redirect to the same page after creating new member
            header("Location: Ratificar_73.php");
        }

        // This PHP script is for specifically for handling the searching of members
        if (isset($_POST['search_member'])) {
            // Get search query
            $searchQuery = $_POST['search'];

            echo '<div class="addressbook">'; // Add the opening div tag with classname
            echo "<h2>Search Results</h2>";
            echo "<hr>";
            $isFound = false;
            if (count($_SESSION['address_book']) > 0) {
                foreach ($_SESSION['address_book'] as $index => $member) {
                    $fullName = $member['first_name'] . ' ' . $member['last_name'];
                    if (strpos($fullName, $searchQuery) !== false || strpos($member['phone_number'], $searchQuery) !== false || strpos($member['address'], $searchQuery) !== false) {
                        $isFound = true;
                        echo "<div class = 'member'> <p>Full Name: {$fullName}</p>";
                        echo "<p>First Name: {$member['first_name']}</p>";
                        echo "<p>Last Name: {$member['last_name']}</p>";
                        echo "<p>Address: {$member['address']}</p>";
                        echo "<p>Phone Number: {$member['phone_number']}</p>";
                        // Adding our Deletion Button
                        echo "<form action='Ratificar_73.php' method='post'>";
                        echo "<input type='hidden' name='full_name' value='{$fullName}'>";
                        echo "<input type='submit' name='delete_member' value='Delete Member'>";
                        echo "</form>";

                        echo "</div>";
                        echo "<hr>";
                    }
                }
            }
            if ($isFound == false) {
                echo "<p style = 'color: red;'>No members found...</p>";
            }
        }

        // This PHP script is for specifically for handling the deletion of members
        if (isset($_POST['delete_member'])) {
            // Get full name of member to delete
            $fullName = $_POST['full_name'];
            // Iterate through the address book array and delete the member with the full name
            foreach ($_SESSION['address_book'] as $index => $member) {
                if ($fullName == $member['first_name'] . ' ' . $member['last_name']) {
                    unset($_SESSION['address_book'][$index]);
                }
            }

            // Redirect to the same page after deleting member
            header("Location: Ratificar_73.php");
        }

        // This PHP script is for specifically for handling the editing of members
        if (isset($_POST['edit_member'])) {
            // Get full name of member to edit
            $fullName = $_POST['full_name'];

            // Iterate through the address book array and edit the member with the full name
            foreach ($_SESSION['address_book'] as $index => $member) {
                if ($fullName == $member['first_name'] . ' ' . $member['last_name']) {
                    // Redirect to the edit member page
                    header("Location: edit_member.php");
                }
            }
        }
        ?>
        <section class='form-container'>
            <!-- The first form we will create will to create an instant of a new member into the address book -->
            <form action="Ratificar_73.php" method="post">
                <h2>Create New Member</h2>
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="first_name" required><br>
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" required><br>
                <label for="phone_number">Phone Number:</label><br>
                <input type="text" id="phone_number" name="phone_number" required><br><br>
                <input type="submit" name="create_member" value="Create Member">
            </form>

            <!-- The second form is for making queries, we will get search result. We should be able to search by name (first or last), phone number, or address -->
            <form action="Ratificar_73.php" method="post">
                <h2>Search Member</h2>
                <label for="search">Search:</label><br>
                <input type="text" id="search" name="search" required><br><br>
                <input type="submit" name="search_member" value="Search Member">
            </form>

            <!-- The third form is for editing the member's details -->
            <form action="Ratificar_73.php" method="post">
                <h2>Edit Member</h2>
                <label for="full_name" placeholder="TARGET YOU WOULD LIKE TO EDIT">Full Name (target):</label><br>
                <input type="text" id="full_name" name="full_name" required><br>
                <label for="first_name">First Name:</label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="last_name" required><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" required><br>
                <label for="phone_number">Phone Number:</label><br>
                <input type="text" id="phone_number" name="phone_number" required><br><br>
                <input type="submit" name="edit_member" value="Edit Member">
            </form>
        </section>
    </main>
</body>
</html>