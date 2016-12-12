<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Orbitron%7cRaleway" rel="stylesheet">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery: Fly to the Limit; New Zealand's greatest flight experience</title>
</head>

<body>
    <div class="main-container">
        <?php include 'includes/header.php';?>
        <div class='gallery_container'>
            <div class="mainImg__container">
                <img id="main__img" src='img/Gallery/gallery_1_900_600.jpg' alt="gallery image large">
            </div>
            <div id='nav'>
                <i class="material-icons left-btn md-48">chevron_left</i>
                <div class="thumbnail__container">
                    <img class="img_thumbnail" src="img/Gallery/gallery_1_300_200.jpg" alt="gallery image 1">
                    <img class="img_thumbnail" src="img/Gallery/gallery_2_300_200.jpg" alt="gallery image 2">
                    <img class="img_thumbnail" src="img/Gallery/gallery_3_300_200.jpg" alt="gallery image 3">
                    <img class="img_thumbnail" src="img/Gallery/gallery_4_300_200.jpg" alt="gallery image 4">
                    <img class="img_thumbnail" src="img/Gallery/gallery_5_300_200.jpg" alt="gallery image 5">
                </div>
                <i class="material-icons right-btn  md-48">chevron_right</i>
            </div>

            <div class="video_container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/V3DVFqJfWQk"  allowfullscreen></iframe>
            </div>
        </div>



   <?php include 'includes/footer.php'?>
    </div>

    <script src="main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        galleryController(document.querySelector('.gallery_container'))
    });</script>
</body>

</html>