<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Basic Template</title>

  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Aapki Custom CSS yahan likh sakte hain -->
  <style>
    body {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>

<div class="container text-center mt-5">
  <div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
    <h1 class="display-5 fw-bold text-primary">Hello, Bootstrap!</h1>
    <p class="col-md-8 fs-4 mx-auto text-muted">Yeh Bootstrap ki sab se basic aur single-page template hai.</p>
    <button id="myButton" class="btn btn-dark btn-lg">Click Me</button>
  </div>
</div>

<!-- Bootstrap JS Bundle CDN (Popper ke sath) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Aapki Custom JavaScript yahan likh sakte hain -->
<script>
  document.getElementById('myButton').addEventListener('click', function() {
    alert('Bootstrap JavaScript kaam kar rahi hai!');
  });
</script>

</body>
</html>