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
      <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="Enter your name" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="userEmail" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="userEmail" name="email" placeholder="Enter your email" value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" name="submit" class="btn btn-custom w-100">Register</button>
      </form>
    </div>
  </div>

  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
  
  <script>

  </script>

</html>