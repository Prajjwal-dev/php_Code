<?php
// Handle the form submission in the same index.php file
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$con = mysqli_connect($server, $username, $password, $dbname);

// Variable to store the success or error message
$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve the input data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $desc = mysqli_real_escape_string($con, $_POST['desc']);

    // Prepare the SQL query
    $sql = "INSERT INTO trip (name, age, gender, email, phone, description) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc')";

    // Execute the query and set the message
    if (mysqli_query($con, $sql)) {
        $successMessage = "Thanks for submitting your form. We're happy to see you joining us for the Kathmandu Trip!";
    } else {
        $errorMessage = "An error occurred during submission: " . mysqli_error($con);
    }
}

// Close the connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Box layout styling */
        .form-box, .msg-box {
            max-width: 600px;
            margin: 2px auto;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .form-box h3, .form-box p, .msg-box p {
            text-align: center;
        }

        /* Styling for return button */
        #returnButton {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        #returnButton:hover {
            background-color: #45a049;
        }

        .submitMsg {
            font-size: 1.2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <img class="bg" src="kathmandu_bg.jpeg" alt="Kathmandu" style="width: 100%; height: auto;">
    <div class="container">
        <!-- Show form until submitted -->
        <?php if (!$successMessage && !$errorMessage): ?>
            <div class="form-box">
                <h3>Welcome to IT Kathmandu Trip Form</h3>
                <p>Enter your details and submit this form to confirm your participation in the trip</p>
            </div>
        <?php endif; ?>

        <!-- Success or Error Message (displayed after submission) -->
        <?php if ($successMessage): ?>
            <div class="msg-box">
                <p id="successMsg" class="submitMsg" style="color: green;"><?php echo $successMessage; ?></p>
                <button id="returnButton" onclick="goBackToDefault()">Go Back to Default Page</button> <!-- Return button -->
            </div>
        <?php elseif ($errorMessage): ?>
            <div class="msg-box">
                <p id="errorMsg" class="submitMsg" style="color: red;"><?php echo $errorMessage; ?></p>
            </div>
        <?php endif; ?>

        <!-- Show form only if no success message -->
        <?php if (!$successMessage): ?>
            <div class="form-box">
                <form id="tripForm" method="post" action="index.php">
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    <input type="number" name="age" id="age" placeholder="Enter your age" required>
                    <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone" required>
                    <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter any other information here"></textarea>
                    <button type="submit" class="btn">Submit</button>
                    <button type="reset" class="btn">Reset</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Function to return to default page
        function goBackToDefault() {
            window.location.href = "index.php"; // Reloads the default page
        }

        // Optional: Scroll down to the message after submission
        if (document.getElementById('successMsg') || document.getElementById('errorMsg')) {
            window.scrollTo(0, document.body.scrollHeight);
        }
    </script>
</body>
</html>
