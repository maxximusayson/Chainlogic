<?php include(APPPATH . 'Views/layout/header.php'); ?>

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
                <form class="contact-form" action="#" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <textarea name="message" placeholder="Enter message" required></textarea>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>