<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Bootstrap 5 Form</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/reg_form.css') }}">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

  <div class="card" style="width: 100%; max-width: 420px;">
    <div class="card-header">
      <h3>Add New User</h3>
    </div>
    <div class="card-body p-4">
      <form action="" method="post">

        <div class="mb-3">
          <label for="username" class="form-label">Name</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name">
        </div>

        <div class="mb-3">
          <label for="userEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="Enter your email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>

        <button type="submit" name="submit" class="btn btn-custom w-100">Register</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>