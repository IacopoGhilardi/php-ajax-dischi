<?php 
    include 'partialsphp/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="logo-spotify">
        </div>
    </header>

    <main>
        <div class="container">
            <?php foreach($disks as $disk) { ?>
                    <div class="card">
                        <div class="image-box">
                            <img src="<?php echo $disk["poster"] ?>" alt="cover">
                        </div>
                        <h2><?php echo $disk["title"] ?></h2>
                        <p><?php echo $disk["author"] ?></p>
                        <p><?php echo $disk["year"] ?></p>
                    </div>
                    
                <?php } ?>
        </div>

    </main>
    
</body>
</html>