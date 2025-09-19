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
<body class="bg-light">
<div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style=max-width: 500px; width=100%>
      <h2 class="text-center mb-4">User Profile</h2>

      <?php
      if (isset($_GET['view']) && $_GET['view'] === "details") {
          if (isset($_SESSION['name']) && isset($_SESSION['age']) && isset($_SESSION['email'])) {
              echo "<ul class='list-group'>";
              echo "<li class='list-group-item'><strong>Name:</strong> " . $_SESSION['name'] . "</li>";
              echo "<li class='list-group-item'><strong>Age:</strong> " . $_SESSION['age'] . "</li>";
              echo "<li class='list-group-item'><strong>Email:</strong> " . $_SESSION['email'] . "</li>";
              echo "</ul>";
          } else {
              echo "<p class='text-danger'>No user data found. Please register first.</p>";
          }
      } else {
          echo "<p class='text-warning'>Invalid view request.</p>";
      }
      ?>

      <div class="mt-4 text-center">
        <a href="index.php" class="btn btn-success">Register Again</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>
