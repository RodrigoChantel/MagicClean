<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/web-projects.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/web-assessments.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/web-plans.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-ico" href="./assets/images/logo.svg">
    <title>Familly</title>
    <style>
    </style>
</head>
<body>
    <?php
        include_once('./views/theme/header.php');
        include_once('./views/theme/content.php');
        include_once('./views/theme/footer.php');
    ?>
</body>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/style.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/fontawesome.js" crossorigin="anonymous"></script>
<script>const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))</script>
</html>
