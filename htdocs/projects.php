<?php
    require './Modules/DatabaseConnection.php';
    require './Modules/Projects.php';
    require "./Modules/Languages.php";
?>

<!doctype html>
<html lang="en" style="height: 100%; scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pojects.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">

    <title>Project Page</title>
</head>

<body style="height: 100%;">

    <?php
    include_once "./includes/nav.php"
    ?>

    <div style="margin: 5em;">
    <?php 
        $projects = getProjects();
     ?>
    <?php foreach ($projects as $project): ?>
        <Button type="button" class="btn border-dark button btn-project"
            id="<?= $project->githublink?>"
            style="padding: 1em; margin: .5em 0em; width: 100%;">
            <h4 class="text-left"><?= $project->title?></h4>
            <p class="text-left"><?= $project->discription?></code></p>
            <p class="text-left">Uploaded at: <?= $project->date?></p>

            <?php if (strlen($project->downloadlink) > 0):?>
                <a href="<?= $project->downloadlink?>" target="_blank"><button class="btn btn-primary downloadButton">Download.Zip (<code><?= $project->title?></code>)</button></a>
            <?php endif?>

            <?php if (strlen($project->testlink) > 0):?>
                <a href="<?= $project->testlink?>" target="_blank"><button class="btn btn-primary downloadButton">Test (<code><?= $project->title?></code>)</button></a>
            <?php endif?>

            <?php foreach (str_split($project->languages) as $id): ?>
                <?php $language = getLanguage($id); ?>
                <p class="tagg" style="color: <?=$language->color;?>;"><?=$language->title?></p>
            <?php endforeach ?>
        </Button>
    <?php endforeach ?>

    <br>
    <hr>

    <a href="./projects.php" download rel="noopener noreferrer" target="_blank">
        <button class="btn btn-primary">Download Page</button>
    </a>

    </div>

    

    <footer class="footer">
        <div class="container" style="height: 8em;">
            <p class="text-center" style="color: white; padding-top: 3em;">Michel De geus, Loosduinen</p>
            <button class="button btn-back-top text-center" style="color: white;">Back to top</button>
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
    <script src="js/projectPage.js"></script>
</body>

</html>