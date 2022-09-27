<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
            
            <?php if (session()->getFlashdata('msg')) : ?>
                <div>
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo base_url(); ?>/LoginController/login" method="post">
                <div>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>