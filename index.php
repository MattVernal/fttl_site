<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Orbitron%7cRaleway" rel="stylesheet">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fly to the Limit; New Zealand's greatest flight experience</title>
</head>
<body>

<?php include 'includes/header.php'; ?>

<section id="landing">
    <h1 class="landing__h1">THE FLIGHT OF A LIFETIME</h1>
    <img class="landing__img" src='img/plane_icon.png' alt="plane_icon"/>
    <p class="landing__p">
        Operating out of Queenstown and Wanaka, Fly to the Limit offer tourists a range of scenic
        flights in both fixed wing and helicopters, as well as high adventure in a stunt
        plane, or the most peaceful flight experience possible in a glider high above the
        mountains. They specialize in one-off charters, and delivery and pickup for
        trampers, also providing a provisioning service for fresh supplies during long excursions.
    </p>
    <a href='booking.html' class="action__button">Book Now</a>

</section>
<div class="video_container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/V3DVFqJfWQk"  allowfullscreen></iframe>
</div>

<section id="services">
    <div class="info_box">
        <img class="info_box__img" src="img/Icons/Heli_Icon.png" alt = 'heli icon'/>
        <h3>Helicopter Tours</h3>
        <p class="services__p">
            Our helicopter tours are your best opportunity to get up close and personal with some of New Zealand's
            most stunning scenery from the air.
        </p>
        <a href='services.html#helicopter' class="action__button">Find Out More</a>
    </div>
    <div class="info_box">
        <img class="info_box__img" src="img/Icons/Glider_Icon.png" alt="glider icon"/>
        <h3>Glider Flights</h3>
        <p class="services__p">
            Our glider flights are an unique opportunity for you to get behind the controls and experience the tranquil
            wonders of flying for yourself in a completely controlled situation.
        </p>
        <a href='services.html#glider' class="action__button">Find Out More</a>
    </div>
    <div class="info_box">
        <img class="info_box__img" src="img/Icons/Stunt_Plane.png" alt="stunt plane"/>
        <h3>Stunt Plane Rides</h3>
        <p class="services__p">
            Looking for a high octane flight experience?
            Our stunt flights will get the adrenaline pumping like nothing else.
        </p>
        <a href="services.html#stunt" class="action__button">Find Out More</a>
    </div>
    <div class="info_box">
        <img class="info_box__img" src="img/Icons/plane_icon.png" alt="plane_icon"/>
        <h3>Plane Tours</h3>
        <p class="services__p">
            For those looking for a more traditional flight experience, our fixed wing plane tours are the best value
            for money
            available.
        </p>
        <a href="services.html#plane" class="action__button">Find Out More</a>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
<script src="main.js">

</script>
</body>
</html>