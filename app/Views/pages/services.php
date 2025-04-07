<?php include(APPPATH . 'Views/layout/header.php'); ?>
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


    <!--About Us-->
    
    <div class="container-fluid" id="containerAbout">
        <div class="container" id="containerAboutBox">
            <div class="container-fluid" id="containerAboutLeft">
                <br>
                <h1>About us</h1>
                <br>
                
                
                <p>"Sed ut perspiciatis unde omnis iste natus 
                error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa 
                quae ab illo inventore veritatis et quasi 
                architecto beatae vitae dicta sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas 
                sit aspernatur aut odit aut fugit, sed quia
                consequuntur magni dolores eos qui 
                ratione voluptatem sequi nesciunt.</p>
            </div>
            <div class="container-fluid" id="containerAboutRight">
                <img src="<?= base_url('images/ServicesImages/img6.png'); ?>" alt="Corporate buildings view from below" class="img-fluid">
            </div>

        </div>
    </div>

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