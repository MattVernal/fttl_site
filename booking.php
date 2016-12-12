<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Orbitron%7cRaleway" rel="stylesheet">
    <link href="main.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Booking :Fly to the Limit; New Zealand's greatest flight experience</title>
</head>

<body>
    <div class="main-container">
        <?php include 'includes/header.php';?>

        <div class="booking_form_container">
            <h3>Booking Request</h3>
            <form id="booking-form" method="GET" action="success.html">
                <div class="form_flexbox">
                    <div class="booking_form_container_left">
                        <div class="form-group">
                            <p>Package:</p>
                            <input type="radio" name="package" value="450" checked >
                            <label>Helicopter Tour
                            </label>
                            <br>
                            <input type="radio" name="package" value="1200">
                            <label>Glider Flight</label>
                            <br>
                            <input type="radio" name="package" value="350">
                            <label>Fixed Wing</label>
                            <br>
                            <input type="radio" name="package" value="700">
                            <label>Stunt Flight</label>
                            <br>
                            <input type="radio" name="package" value="1000">
                            <label>Tramper Drop off / Pick up</label>
                            <br>
                        </div>
                        <div class="form-group">
                            <Label>Number of People</Label>
                            <br>
                            <input value="1" type="text" id="numberOfPeople" name="numberOfPeople" required minlength="1" >
                            <span id="numberOfPeople-error"></span>
                        </div>
                        <p>Date & Time:</p>
                        <div class="form-group">
                            <label for="departure-date">Departure Date:</label>
                            <br>
                            <input class='date' id="departure-date" type="text" name="date-time" required minlength="2" placeholder="DD/MM/YYYY" >
                            <br><span id="departure-date-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="departure-time">Departure Time:</label>
                            <br>
                            <input class='time' id="departure-time" type="text" name="date-time" required minlength="2" placeholder="HH:MM" >
                            <br><span id="departure-time-error"></span>
                        </div>
                        <div id="tramper_options" class="hide">
                            <div class="form-group">
                                <label for="pickup-date">Pickup Date:</label>
                                <br>
                                <input class='date' id="pickup-date" type="text" name="date-time" required minlength="2" placeholder="DD/MM/YYYY" >
                                <br><span id="pickup-date-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="pickup-time">Pickup Time:</label>
                                <br>
                                <input class='time' id="pickup-time" type="text" name="date-time" required minlength="2" placeholder="HH:MM" >
                                <br><span id="pickup-time-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="booking_form_container_right">

                        <div class="form-group">
                            <p>Flight Duration:</p>
                            <input type="radio" name="duration" value="1" checked>
                            <label>1 Hour Scenic
                            </label>
                            <br>
                            <input type="radio" name="duration" value="2">
                            <label>2 Hour Scenic</label>
                            <br>
                            <input type="radio" name="duration" value="3">
                            <label>Mountain Viewing (3 Hour)
                            </label>
                            <br>
                            <input type="radio" name="duration" value="4">
                            <label>Lake Trip (4 hour)</label>
                            <br>
                            <input type="radio" name="duration" value="5">
                            <label>Photographic Flight (5 hour)
                            </label>
                            <br>
                        </div>
                        <div>
                            <p>Details:</p>
                            <div class="form-group">
                                <label for="fullname">Full Name:</label>
                                <br>
                                <input id="fullname" type="text" name="fullname" required minlength="2" >
                                <br><span id="fullname-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <br>
                                <input id="age" type="text" name="age" required minlength="2" >
                                <br><span id="age-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <br>
                                <input id="email" type="email" name="email" required minlength="2" placeholder='someone@example.com' >
                                <br><span id="email-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">Contact Phone:</label>
                                <br>
                                <input id="phone" type="text" name="phone" required minlength="7" placeholder='XXXXXXX'>
                                <br><span id="phone-error"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="form__submit-container">
                    <span id="price_output"></span>
                    <button class="action__button" type="submit">Place Booking</button>
                </div>
            </form>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>

    <script src="main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            addFormValidation(document.querySelector('#booking-form'))
        });
        document.addEventListener('DOMContentLoaded', function () {
            showTramperDates(document.querySelector('#booking-form'))
        });
        document.addEventListener('DOMContentLoaded', function () {
            calculatePrice(document.querySelector('#booking-form'))
        });
    </script>
</body>

</html>