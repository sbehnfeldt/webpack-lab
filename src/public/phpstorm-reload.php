<?php
// When this page is displayed using PHPStorm's built-in web server, it (the page) will automatically reload
// when edits are made to the source, but STATE IS NOT MAINTAINED

$name = 'phpstorm-relad';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php
            echo $name; ?></title>
    </head>

    <body>
        <h1><?php
            echo $name; ?></h1>
        <p>Hello, <?= $name ?></p>
        <button onclick="addClick()">Clicks <span id="clicks"></span></button>

        <script>
            let clicks = 0;

            function addClick() {
                clicks++;
                showClicks();
            }

            function showClicks() {
                let span         = document.getElementById('clicks');
                span.textContent = clicks;
            }

            showClicks();
        </script>
    </body>
</html>

