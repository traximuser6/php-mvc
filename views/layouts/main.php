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

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <!-- home -->
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <!-- contact -->
      <li class="nav-item active">
        <a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>
      </li>
  </div>
</nav>

{{content}}

<!-- Bootstrap JS Bundle CDN (Popper ke sath) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Aapki Custom JavaScript yahan likh sakte hain -->
<script>
  document.getElementById('myButton').addEventListener('click', function () {
    alert('Bootstrap JavaScript kaam kar rahi hai!');
  });
</script>

</body>
</html>