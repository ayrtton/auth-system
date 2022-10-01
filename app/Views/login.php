<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo base_url("css/style.css"); ?>">
    </head>
    <body>
        <main>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div>
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo base_url(); ?>/LoginController/login" method="post">
                <h1 id="title">Login</h1>
                <div class="input-container">
                    <input class="text-input" type="email" name="email" placeholder="Email">
                </div>
                <div class="input-container">
                    <input class="text-input" type="password" name="password" placeholder="Password">
                </div>
                <div class="input-container">
                    <button id="button" type="submit">Login</button>
                </div>
                <hr />
                <div id="signup-container">
                    <a id="signup" href="signup">Create Account</a>
                </div>
            </form>
        </main>
    </body>
</html>