<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['name']  = $_POST['name'];
    $_SESSION['age']   = $_POST['age'];
    $_SESSION['email'] = $_POST['email'];

    header("Location: profile.php?id=1");
    exit();
} else {
    echo "Invalid Request. Please go back.";
}
?>
