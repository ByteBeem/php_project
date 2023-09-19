<?php
$host = '127.0.0.1';
$username = 'root';
$database = 'project';

// Create a database connection
$conn = new mysqli($host, $username, '', $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the hashed password and user data from the database based on the email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, fetch user data
            $name = $row['name'];
            $email = $row['email'];
            $student = $row['studentNo'];
            $surname = $row['surname'];
            $cellphone = $row['cellphone'];
            $Profile= $row['profile_picture'];
            $module = $row['moduleCode'];
           
           

            // Redirect to the profile page
            header('Location: home.php?name=' . urlencode($name) . '&student=' . urlencode($student) . '&email=' . urlencode($email) . '&Profile=' . urlencode($Profile)  . '&surname=' . urlencode($surname) . '&cellphone=' . urlencode($cellphone) . '&module=' . urlencode($module));

            exit();
        } else {
            // Password is incorrect
            echo "Login failed. Please check your email and password.";
        }
    } else {
        // User with the given email not found
        echo "Login failed. User not found.";
    }
}

// Close the database connection
$conn->close();
?>
