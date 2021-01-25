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
                <img :src="logo" alt="logo-spotify">
            </div>
            
            <form action="partialsphp/db.php" method="get">
                <select value="genre" name="genre">
                    <option value="">Filtra per genere</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Rock">Jazz</option>
                    <option value="Rock">Metal</option>
                </select>
                <button type="submit">Filtra</button>
            </form>

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