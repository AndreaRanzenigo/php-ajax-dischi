<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
</head>
<body>

    <!-- App -->
    <div id="app">

        <!-- Header -->
        <header>
   
        </header>

        <?php 
        require __DIR__ . '/partials/discs.php';
        ?>
        <!-- Main -->
        <main>
            <div class="container">
                <ul class="disc">
                    <?php 
                    foreach ($database as $key => $disc) { 
                        // var_dump($disc);
                        ?>
                        <li>
                        <img src="<?php echo $disc['poster'] ?>" alt="poster">
                        <h2><?php echo $disc['title']; ?></h2>
                        <h4><?php echo $disc['author'] ?></h4>
                        <h3><?php echo $disc['year'] ?></h3>
                        <h4><?php echo $disc['genre'] ?></h4>
                        </li>
                        
                    <?php } ?>
                </ul>

            </div>
        </main>

    </div>
</body>
</html>