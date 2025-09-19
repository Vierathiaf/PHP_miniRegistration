<?php
session_start();

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['name']  = $_POST['name'];
    $_SESSION['age']   = $_POST['age'];
    $_SESSION['email'] = $_POST['email'];

    // Redirect to profile page with GET parameter
    header("Location: profile.php?view=details");
    exit();
} else {
    echo "Invalid Request. Please go back.";
}
?>
