<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    </head>
    <body>
        <main>
            <div id="welcome">
                <span>Welcome, <?php echo session()->get('name') ?>!</span>
                <a id="logout" href="<?php echo base_url(); ?>/LoginController/logout">Logout</a>
            </div>
        </main>
        <script src="<?php echo base_url("js/javascript.js"); ?>"></script>
    </body>
</html>