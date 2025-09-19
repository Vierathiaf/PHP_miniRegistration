<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%); min-height: 100vh;">
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style=max-width: 500px; width=100%>
      <h2 class="text-center mb-2">User Profile</h2>

      <?php
      if (!isset($_SESSION['name'])) {
        echo "No registration data found. Please register first.";
        exit();
    }
    
    if (isset($_GET['id']) && $_GET['id'] == 1) {
        echo "<div class='container mt-4'>";
        echo "<div class='card p-4'>";
        echo "<p><strong>Name:</strong> " . $_SESSION['name'] . "</p>";
        echo "<p><strong>Age:</strong> " . $_SESSION['age'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_SESSION['email'] . "</p>";
        echo "<a href='index.php' class='btn btn-primary mb-2'>Register Again</a>";
        echo "<a href='logout.php' class='btn btn-danger'>Logout</a>";
        echo "</div></div>";
    } else {
        echo "Invalid profile ID.";
    }
    ?>
    
    </div>
  </div>
</body>
</html>
