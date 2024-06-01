<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <?php include_once("includes/head.php") ?>
</head>
<body>

<div class="services-first">
<?php include_once("includes/header.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="classy-text">
                    <h1>Thank You</h1>
                    <p>We will contact you</p>
                    <button class="get-started-btn">Get started</button>
                </div>
               
            </div>
            <div class="col-md-6">
            <form action="/leads/" method="POST" class="form">
                    <input type="hidden" name="route" value="/ghostwriting/">
<input type="hidden" name="brief" value="">
<input type="hidden" name="brand" value="NATIVEBOOKAUTHORS">
<input type="hidden" name="token" value="dd9516094f198cc8f60001b7bb87ff9221b24cf814bc53844845b78d0de873c4">
<input type="hidden" name="tag" value="top-form">
<input type="hidden" name="price" value="null">
<input type="hidden" name="news" value="1">
           <input type="hidden" name="subject" value="Banner Form (nativebookauthors.com)">
                        <h3>Sign up to AVAIL</h3>
                        <p>
                            Discuss Your Project With Our Experts
                        </p>
                        <input type="text" name="name" placeholder="Enter Your Name" required="">
                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                        <input type="text" name="phone" placeholder="Phone Number" required="">
                        <textarea name="" id="" rows="4" required="" placeholder="Brief Description"></textarea>
                        <button type="submit">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
<div class="services-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-content">
                <div class="text-white">
                    <h1>GET</h1>
                    <h2>All NFTs related services</h2>
                    <button class="btn-white">Get Started</button>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="image-container">
                    <img src="assets/images/58.png" alt="" class="centered-image">
                </div>
            </div>
        </div>
    </div>
</div>






<div class="get-touch">
    <div class="container">
        <div class="row">
            <div class="col-md-4 left-column">
                <span class="left-image">
                    <img src="assets/images/monkey56.png" alt="">
                </span>
            </div>
            <div class="col-md-4 middle-column">
                <h1>Get In Touch</h1>
                <button>Contact Us</button>
            </div>
            <div class="col-md-4 right-column">
                <span class="right-image">
                    <img src="assets/images/monket24.png" alt="">
                </span>
            </div>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php") ?>
</body>
</html>