<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style -->
    <link rel="stylesheet" href="./style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
    <header>
        <div class="header">
            <img src="./img/spotify_logo.webp" alt="">
        </div>

    </header>

    <main id="root">
       

    <div class="albumsSection" >
            
        
        <div class="card vForFlex"  v-for="oneAlbum in albums"  >
            
            <div class="innerCard" >
                        <img :src="oneAlbum.poster" alt="Album Title">
                        <h3>{{ oneAlbum.title}} </h3>
                        <p>{{ oneAlbum.author}}</p>
                        <p> {{ oneAlbum.year}}</p>
                    </div>
                
     
            </div>

            
            </div>
            
        

    </main>

    <script src="./js/script.js"></script>
</body>
</html>