<?php require APPROOT . '/views/includes/header.php';

?>
<div id="background">
    <div id="form-bg"></div>
    <div class="container" id="container">
        <div class="shadow-container left-container">
            <div class="sign-up-container">
                <h2>Don't have an account?</h2>
                <hr class="blue-line">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipsicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button id="signUp">Sign Up</button>
            </div>
        </div>

        <div class="shadow-container right-container">
            <div class="sign-in-container">
                <h2>Have an account?</h2>
                <hr class="blue-line">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipsicing elit.</p>
                <button id="signIn">Login</button>
            </div>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <form action="register" method="post">
                        <h2>Sign Up</h2>
                        <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
                        <hr class="blue-line">
                        <label>Name<span class="required">*</span></label>
                        <img class="icon" src="<?php echo URLROOT; ?>img/icons/user.png">
                        <input type="text" />
                        <label>Email<span class="required">*</span></label>
                        <img class="icon" src="<?php echo URLROOT; ?>img/icons/mail.png">
                        <input type="email" />
                        <label>Password<span class="required">*</span></label>
                        <img class="icon" src="<?php echo URLROOT; ?>img/icons/lock.png">
                        <input type="password" />
                        <button name="register" type="submit">Sign Up</button>
                    </form>
                </div>
                <div class="overlay-panel overlay-right">
                    <form action="login" method="post">
                        <h2>Login</h2>
                        <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
                        <hr class="blue-line">
                        <label>Email<span class="required">*</span></label>
                        <img class="icon" src="<?php echo URLROOT; ?>img/icons/mail.png">
                        <input type="email" />
                        <label>Password<span class="required">*</span></label>
                        <img class="icon" src="<?php echo URLROOT; ?>img/icons/lock.png">
                        <input type="password" />
                        <button name="login" type="submit">Login</button>
                        <a href="#" class="icon">Forgot?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["register"])) {
        echo '<script>
            container = document.getElementById("container");
            container.classList.add("right-panel-active");
            </script>';
    }
    ?>

    <?php require APPROOT . '/views/includes/footer.php'; ?>