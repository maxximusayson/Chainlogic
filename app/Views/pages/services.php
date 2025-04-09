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
    <title>Our Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/assets/css/servicesStyle.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>

<body>


    

    <div class="container-fluid" id="services-container">
        <div class="container-fluid" id="containerBox">
            
            <div class="container p-0 m-0" id="containerLeft">
            <br>
            <br>
                <div class="top-decoration"></div>
                <br>
                <br>
                <div class="center-decoration">
                    <div class="circle-image">
                        <img src="<?= base_url('images/ServicesImages/img1.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
                    </div>
                </div>
                <br>
                <br>
                <div class="bottom-decoration"></div>
            </div>
            <div class="container p-0 m-0" id="containerRight">
                <br>
                <br>
                <h1>Services</h1>
                <br>
                <!--2 column images -->
                <!-- Grid of images on the left side of the right container -->
                <div class="container-fluid m-0 p-0" id="gridPic">
                    <div class="containerCard">
                        <img src="<?= base_url('images/ServicesImages/img2.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
                    </div>
                    <div class="containerCard">
                        <img src="<?= base_url('images/ServicesImages/img3.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
                    </div>
                    <div class="containerCard">
                        <img src="<?= base_url('images/ServicesImages/img2.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
                    </div>
                    <div class="containerCard">
                        <img src="<?= base_url('images/ServicesImages/img3.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>