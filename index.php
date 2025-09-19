<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%); min-height: 100vh;">
  <div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style=max-width: 500px; width=100%>
      <h2 class="text-center mb-2 ">Mini Registration </h2>
      <p class="text-center text-muted">Please fill in your details below. </p>
      <form action="save.php" method="POST" class="needs-validation" novalidate>
        
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" required>
          <div class="invalid-feedback">Please enter your name.</div>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Age</label>
          <input type="number" class="form-control" name="age" required min="1">
          <div class="invalid-feedback">Please enter a valid age.</div>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
    </div>
  </div>

  <script>
    (() => {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>
