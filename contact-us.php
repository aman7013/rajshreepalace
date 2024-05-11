<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta charset="UTF-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <link rel="alternate" href="" hreflang="x-default">
    <link rel="shortcut icon" href="" type="">
    <link rel="apple-touch-icon" sizes="57x57" href="">
    <link rel="apple-touch-icon" sizes="60x60" href="">
    <link rel="apple-touch-icon" sizes="72x72" href="">
    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="apple-touch-icon" sizes="114x114" href="">
    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="apple-touch-icon" sizes="144x144" href="">
    <link rel="apple-touch-icon" sizes="152x152" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">

    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:image" content="">

    <?php include 'links.php'; ?>

</head>

<?php include 'header.php'; ?>


<div class="contact-us_image">

    <div class="contact-us_image_c2">
        <h1>Contact Us</h1>
        <p>For bookings and enquiries, please call us or write to us.</p>
    </div>
</div>




<div class="contact-us">
    <div class="contact-us_c1">
        <h2>Your Details</h2>
        <form action="#" method="POST" class="contact-form">

            <label for="name">Name: </label>
            <input type="text" id="name" name="name" required>


            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone: </label>
            <input type="tel" id="phone" name="phone">

            <label for="message">Message: </label>
            <textarea id="message" name="message" rows="10" required></textarea>

        </form>
        <p class="button contact-btn">
          <a href="about-us.php" class="section-btn">
          <i class="fa-solid fa-paper-plane"></i>
            Send
          </a>
        </p>
    </div>
    <div class="contact-us_c2">
        <div class="contact-us_c2_1">
            <h2>DETAIL</h2>
            <p>If You Have Any Questions Simply Use the Following Contact Details.</p>
        </div>
         
        <div class="contact-us_c2_3">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <span>
                <h5>TIME</h5>
                <p>24x7</p>
            </span>

        </div>
        <div class="contact-us_c2_3">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <span>
                <h5>Call or Whatsapp</h5>
                <p><a href="tel: " target="_blank"> +91-9191919191</a></p>
            </span>
        </div>
        <div class="contact-us_c2_3">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <span>
                <h5>EMAIL</h5>
                <p><a href="mailto:bhatt.ash.ashish@gmail.com">rajshreepalace@gmail.com</a></p>
            </span>


        </div>
        <div class="contact-us_c2_3">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <span>
                <h5>LOCATION</h5>
                <p>Jakhdhar road, Guptkashi, <br> Dewar, Uttarakhand 246439, <br>India</p>
                </spanp>

        </div>

    </div>
</div>
<div class="contact-us_c4">
    <div class="contact-us_c4-1">
        <img src="img/booking.png" alt="">
    </div>
    <div class="contact-us_c4-1">
        <img src="img/trip-advisor.jpg" alt="">
    </div>
    <div class="contact-us_c4-1">
        <img src="img/makemytrip.jpg" alt="">
    </div>
    <div class="contact-us_c4-1">
        <img src="img/Logo_Bluepillow.png" alt="">
    </div>
</div>
<br>

<div class="contact-us_map">
    <div class="contact-us_map_c1">
        <div class="contact-us_c3">
            <div class="contact-us_c3-1">
                <h2>HOTEL LOCATION AND MAP</h2>
                <p>Driving direction</p>
                <h5>Airport Pick & Drop Avilable on Chargeable Basis</h5>
            </div>
        </div>
        <div class="contact-us_c3-2">
            <div class="contact-us_c3-2-1">
                <h3>180.0 Km</h3>
                <p>Away form Rialway station</p>
            </div>
            <div class="contact-us_c3-2-2">
                <h3>92 km</h3>
                <p>Away from the airport</p>
            </div>
        </div>

        <div class="contact-table-c0">
            <table class="contact-table">
                <tr>
                    <th>Places nearbuy</th>
                    <th>Distance</th>
                    <th>Travel Time</th>
                </tr>
                <tr>
                    <td>Tungnath</td>
                    <td>40 Km</td>
                    <td>1hr 30 Min</td>
                </tr>
                <tr>
                    <td>Chopta</td>
                    <td>57KM</td>
                    <td>2 hr 17 min</td>
                </tr>
                <tr>
                    <td>Auli</td>
                    <td>47 KM</td>
                    <td>2 hr</td>
                </tr>
                <tr>
                    <td>Triyuginarayan</td>
                    <td>37.4 KM</td>
                    <td>1 hr 29 min</td>
                </tr>
            </table>
        </div>

    </div>
    <div class="contact-us_map_c2">
        <div style="max-width:100%;overflow:hidden;color:red;width:100%;height:100%;">
            <div id="canvas-for-googlemap" style="height:100%; width:100%;max-width:100%;"><iframe
                    style="height:100%;width:100%;border:0;" frameborder="0"
                    src="https://www.google.com/maps/embed/v1/place?q=rajshree,+jakhdhar+road,+Guptkashi,+Uttarakhand,+India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
            </div><a class="googlecoder" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium
                bootstrap themes</a>
            <style>
                #canvas-for-googlemap img {
                    max-height: none;
                    max-width: none !important;
                    background: none !important;
                }
            </style>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<body>
</body>

</html>