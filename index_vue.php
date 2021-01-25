<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <div id="root">
        <header>
            <div class="container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="logo-spotify">
            </div>
        </header>

        <main>
            <div class="container">
                <div class="card" v-for="cd in disks">
                        <div class="image-box">
                            <img :src="cd.poster" alt="cover">
                        </div>
                        <h2> {{cd.title}} </h2>
                        <p> {{cd.author}} </p>
                        <p> {{cd.year}} </p>
                </div>
            </div>
        </main>

    </div>


    <script src="js/app.js"></script>
</body>
</html>