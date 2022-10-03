<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="<?php echo base_url("css/style.css") ?>">
    </head>
    <body>
        <main>
            <?php if (isset($validation)) : ?>
                <div id="message">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <form id="signup-form" action="<?php echo base_url(); ?>/SignUpController/store" method="post">
                <h1 id="title">Sign Up</h1>
                <div class="input-container">
                    <input class="text-input" type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>">
                </div>
                <div class="input-container">
                    <input class="text-input" type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                </div>
                <div class="input-container">
                    <input class="text-input" type="password" name="password" placeholder="Password">
                </div>
                <div class="input-container">
                    <input class="text-input" type="password" name="confirmpassword" placeholder="Confirm Password">
                </div>
                <div class="input-container">
                    <button id="button" type="submit" class="btn btn-dark">Signup</button>
                </div>
                <hr />
                <div id="form-footer">
                    <a id="signup" href="signup">Login</a>
                </div>
            </form>
        </main>
    </body>
</html>