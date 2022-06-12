<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php include __DIR__ . "/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="./img/spotify_logo.webp" alt="">
        </div>

    </header>

    <main>
        <div class="albumsSection">


            <?php foreach ($database as $album) { ?>

                <div class="card">
                    <div class="innerCard">
                        <img src=" <?php echo $album['poster'] ?>" alt="Album Title">
                        <h3> <?php echo $album['title'] ?> </h3>
                        <p> <?php echo $album['author'] ?> </p>
                        <p> <?php echo $album['year'] ?> </p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

</body>

</html>