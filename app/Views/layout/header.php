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
      <a href="/about">About</a>
      <a href="/services">Services</a>
      <a href="/contact">Contact</a>
    </div>

    <div class="burger-menu" id="burger-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>

  <script>
    // Toggle menu
    const burgerMenu = document.getElementById('burger-menu');
    const navLinks = document.querySelector('.nav-links');

    burgerMenu.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });

    // Set active link based on URL
    const currentPath = window.location.pathname;
    const links = document.querySelectorAll('.nav-links a');

    links.forEach(link => {
      const href = link.getAttribute('href');
      if (href === currentPath || (href === '/' && currentPath === '/index')) {
        link.classList.add('active-link');
      }
    });
  </script>
</body>
</html>

