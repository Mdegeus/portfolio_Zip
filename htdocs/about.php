<!doctype html>
<html lang="en" style="height: 100%; scroll-behavior: smooth;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/theme.css">

    <title>Mdegeus</title>
</head>

<body>

    <?php
    include_once "./includes/nav.php";
    ?>

    <section class="ContactSection">
        <div class="center-div-contacts">
            <h3>Contact Information</h3>
            <p>Email: Parisensuki1@gmail.com</p>
            <p>Phone: Comming Soon</p>
            <p>IG: @Michel_dh_</p>
        </div>
    </section>

    <section class="EmailSection">
        <div class="center-div-contacts">
        <?php 
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
                if ($email == "nomail") {
                    echo "<h1 style=\"color:red;\">Please enter a valid email address</h1>";
                }else{
                echo "<h1 style=\"color:green;\">email has been send with: $email</h1>";
                }
            }
        ?>
            <form action="./includes/email.inc.php" method="post">
                <input type="text" name="email" placeholder="email">
                <input type="text" name="name" placeholder="name">
                <input type="text" name="message" placeholder="message">
                <button name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container" style="height: 8em;">
            <p class="text-center" style="padding-top: 3em;">Michel De geus, Loosduinen</p>
            <button class="button btn-back-top text-center">Back to top</button>
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