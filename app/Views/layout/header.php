<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Teachers&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Chainlogic</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
  <nav>
    <div class="logo">
      <img src="images/logo.png" alt="Logo">
    </div>
    <div class="nav-links">
      <a href="/">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="contact">Contact</a>
    </div>
    <div class="burger-menu" id="burger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <script>
    // JavaScript to toggle the nav links visibility
    const burgerMenu = document.getElementById('burger-menu');
    const navLinks = document.querySelector('.nav-links');

    burgerMenu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>
