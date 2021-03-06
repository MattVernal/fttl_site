<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Orbitron%7cRaleway" rel="stylesheet">
    <link href="main.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Contact Us :Fly to the Limit; New Zealand's greatest flight experience</title>
</head>

<body>
<div class="main-container">
    <?php include 'includes/header.php';?>
    <div class="contact_form_container">
        <h3>Contact Us</h3>
        <form id="contact-form" method="GET" action="contact-success.html">
            <div class="form_flexbox">
                <div class="booking_form_container_left">
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <br>
                        <input id="fullname" type="text" name="fullname" required minlength="2">
                        <br><span id="fullname-error"></span></div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <br>
                        <input id="email" type="email" name="email" required minlength="2">
                        <br><span id="email-error"></span></div>
                    <div class="form-group">
                        <label for="phone">Contact Phone:</label>
                        <br>
                        <input id="phone" type="text" name="phone" required minlength="2" placeholder= "XXXXXXX">
                        <br><span id="phone-error"></span></div>
                </div>
                <div class="booking_form_container_right">
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <br>
                        <input id='subject' type='text' name='subject' required>
                        <br><span id="subject-error"></span>
                    </div>
                    <div class="form-group">
                        <label for='message'>Message</label>
                        <br>
                        <textarea id='message' name='message' rows='10' form='contact-form' required></textarea>
                        <br><span id="message-error"></span>

                    </div>
                </div>
            </div>
            <div id="form__submit-container">
                <button class="action__button" type="submit">Send Message</button>
            </div>
        </form>
    </div>

</div>
<?php include 'includes/footer.php';?>

<script src="main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        addFormValidation(document.querySelector('#contact-form'))
    });
</script>
</body>

</html>