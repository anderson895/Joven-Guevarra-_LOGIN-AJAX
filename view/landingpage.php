<?php 
  include "../controller/session.php";

  // $db_fullname = $row["fullname"];
  // $db_email = $row["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La consolacion university philippines</title>
  <link rel="icon" href="https://www.lcup.edu.ph/images/LCUP.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/landingpage.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #007bff;">
  <div class="container d-flex justify-content-between align-items-center">
    <h2 class="navbar-brand text-white" href="#">La Consolacion University Philippines</h2>
    <div class="navbar-nav ms-auto">
      <a class="nav-link text-white" href="../controller/logout.php"><b>Logout</b></a>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
  <h1>Welcome <span style="color:red;"><?=$db_fullname ?></span></h1>
  <!-- Add your landing page content here -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
