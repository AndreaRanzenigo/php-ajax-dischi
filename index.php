<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Main css -->
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
    <body>

        <!-- App -->
        <div id="app">

            <!-- Header -->
            <header>
                <img src="./img/logo.png" alt="logo">
            </header>


            <?php 
            require __DIR__ . '/partials/discs.php';
            ?>
            <!-- Main -->
            <main>

                <!-- Filter -->
                <div class="filter">
                    <label for="filter-author">Filter for author:</label>
                    <select v-model='key' id="filter-author" @change='setAuthor'>
                        <option value="all">All</option>
                        <option v-for="disc in discs" :value="`${disc.author}`">
                            {{disc.author}}
                        </option>
                    </select>
                </div>

                <div class="container">
                    <!-- Stampa dischi con php -->
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
                    
                    <!-- Stampa dischi con axios e vue -->
                    <ul class="disc">
                        <li v-for='disc in discs'>
                            <img :src="`${disc.poster}`" :alt="`${disc.title}`">
                            <h2>{{ disc.title }}</h2>
                            <h4>{{ disc.author }}</h4>
                            <h3>{{ disc.year }}</h3>
                            <h4>{{ disc.genre }}</h4>
                        </li>
                    </ul>

                </div>
            </main>

        </div>

        <!-- JS -->
        <script src="./dist/js/main.js"></script>
    </body>
</html>