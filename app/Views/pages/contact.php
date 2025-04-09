<?php include(APPPATH . 'Views/layout/header.php'); ?>

<!-- Loader -->
<div id="loader">
  <img src="<?= base_url('images/logo.png') ?>" alt="Logo" class="loader-logo">
  <div class="spinner"></div>
</div>
<style>
  /* Fullscreen Loader Container */
  #loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #588FA6;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.7s ease;
  }

  /* Logo styling */
  .loader-logo {
    width: 120px;
    height: auto;
    margin-bottom: 20px;
  }

  /* Spinner style */
  .spinner {
    border: 6px solid rgba(255, 255, 255, 0.3);
    border-top: 6px solid white;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
</style>
<script>
  // Fade out the loader after 5 seconds
  setTimeout(() => {
    const loader = document.getElementById('loader');
    loader.style.opacity = '0';
    setTimeout(() => {
      loader.style.display = 'none';
    }, 700); // match the CSS transition duration
  }, 3000);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/contactStyle.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="contact-section m-0 p-0">
        <div class="map-container m-0 p-0">
            <img src="<?= base_url('images/ContactImages/map.png'); ?>" alt="Location Map">
        </div>
        <div class="formlayout">
            <div class="form-container">

                <h1 class="contact-title">Contact us</h1>
                <div class="contact-info">
                    <p>Address:</p>
                    <p>Phone Number:</p>
                    <p>Email:</p>
                </div>
                <form class="contact-form" action="<?= base_url('contact/create'); ?>" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <textarea name="message" placeholder="Enter message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!--Toast Message-->
    <?php if (session()->getFlashdata('success') || session()->getFlashdata('error')): ?>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
            <div id="contactToast" class="toast align-items-center text-bg-<?= session()->getFlashdata('success') ? 'success' : 'danger' ?> border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?= session()->getFlashdata('success') ?: session()->getFlashdata('error') ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const toastEl = document.getElementById('contactToast');
            if (toastEl) {
                const toast = new bootstrap.Toast(toastEl, {
                    delay: 3000, // Auto-hide after 3 seconds
                    autohide: true
                });
                toast.show();
            }
        });
    </script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>