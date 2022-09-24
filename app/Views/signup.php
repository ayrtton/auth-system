<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
    </head>
    <body>
        <div class="container">
            <h2>Sign Up</h2>
            
            <?php if (isset($validation)) : ?>
                <div>
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

            <form action="<?php echo base_url(); ?>/SignUpController/store" method="post">
                <div>
                    <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-dark">Signup</button>
            </form>
        </div>
    </body>
</html>