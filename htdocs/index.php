<?php
    require './Modules/DatabaseConnection.php';
    require "./Modules/Languages.php";
?>

<!doctype html>
<html lang="en" style="height: 100%; scroll-behavior: smooth;" class="AllwaysShow">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Mdegeus</title>
</head>

<body style="height: 100%;">
    <?php
        include_once "./includes/nav.php";
        $languages = getLanguages();
    ?>

    <section style="margin: 50vh 5em 50vh 5em;">
        <h3 class="text-center color1">Hello my name is Michel and I'm a <code>&ltSoftware Developer&gt</code></h3>
    </section>
    <section class="text-center" style="margin: 50vh 0 50vh 0;">
        <div>
        <div class="card d-inline-flex" style="width: 18rem; display:inline-block; margin: 1em 0em;">
            <img class="card-img-top" src="images/Laguages_CardImage.png" style="width: 100%;">
            <div class="card-title">
                <h5 class="color2">Languages</h5>
            </div>
            <div class="card-body">
                <?php foreach($languages as $language):?>
                    <p class="tagg" style="color: <?=$language->color;?>;"><?=$language->title?></p>
                <?php endforeach;?>
            </div>
        </div>
        <div class="card d-inline-flex" style="width: 18rem; height: 31.2vh; margin: 1em 0em;">
            <img class="card-img-top" src="images/Projects_CardImage.png" style="width: 100%;">
            <div class="card-title">
                <h5 class="color1">Projects</h5>
            </div>
            <div class="card-body">
                <a href="./projects.php"><button class="btn project-btn" style="border-radius: 22px; color: white;">Show</button></a>
            </div>
        </div>
        </div>
        <!-- for now there is no professionProfile, i leave this here for when i do add one -->
        <!-- <div class="card d-inline-flex" style="width: 18rem; height: 55vh; margin: 1em 0em;">
            <img class="card-img-top" src="images/download_1.jfif" style="width: 100%;">
            <div class="card-title">
                <h5 class="color2">Profession profile</h5>
            </div>
            <div class="card-body">
                <button class="btn professionProfile-btn" style="border-radius: 22px; color: white;">Show</button>
            </div>
        </div> -->
    </section>

    <footer class="footer">
        <div class="container" style="height: 8em;">
            <p class="text-center" style="color: white; padding-top: 3em;">Michel De geus, Loosduinen</p>
            <button class="button btn-back-top text-center" style="color: black;">Back to top</button>
            <button class="button btn-timeBased text-center" style="color: black;">timeBased: false</button>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="js/main.js" type="module"></script>
</body>

</html>