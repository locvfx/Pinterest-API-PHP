<?php require "boot.php"; ?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Hey you!</h1>
        <h2>$pinterest->pins->create()</h2>

        <?php echo $pinterest->pins->create(array(
            "board"         => "pinterest-api-test",
            "note"          => "Test from API",
            "image_url"     => "https://download.unsplash.com/photo-1438216983993-cdcd7dea84ce"
        )); ?>

    </body>
</html>