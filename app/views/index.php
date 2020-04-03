<?php require APPROOT . '/views/includes/header.php';

if (!empty($_SESSION['regSuccess'])) {
    echo '<script>alert("Sign up succesful! You can now login.");</script>';
    unset($_SESSION['regSuccess']);
}
?>

<div id="bg-shape"></div>
<div class="shadow-container">
    <div class="left-container">
        <div class="sign-up-container">
            <h2>Don't have an account?</h2>
            <hr class="blue-line">
            <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipsicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <button class="shadow-button" id="sign-up">Sign Up</button>
        </div>
    </div>

    <div class="right-container">
        <div class="sign-in-container">
            <h2>Have an account?</h2>
            <hr class="blue-line">
            <p class="text">Lorem ipsum dolor sit amet consectetur adipsicing elit.</p>
            <button class="shadow-button" id="sign-in">Login</button>
        </div>
    </div>
</div>

<div class="container" id="container">
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <form class="panel-form" action="<?php echo URLROOT; ?>home/register" method="post">
                    <h2 class="main-heading">Sign Up</h2>
                    <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
                    <hr class="blue-line">
                    <div class="signup-user">
                        <label>Name<span class="required">*</span></label>
                        <img class="icon unactive" src="<?php echo URLROOT; ?>img/icons/user.png">
                        <img class="icon active" src="<?php echo URLROOT; ?>img/icons/user-a.png">
                        <input name="name" type="text" value="<?php echo $data['name']; ?>" />
                        <span class="error-msg"><?php echo $data['regNameErr']; ?></span>
                    </div>
                    <div class="signup-email">
                        <label>Email<span class="required">*</span></label>
                        <img class="icon unactive" src="<?php echo URLROOT; ?>img/icons/mail.png">
                        <img class="icon active" src="<?php echo URLROOT; ?>img/icons/mail-a.png">
                        <input name="email" type="email" value="<?php echo $data['email']; ?>" />
                        <span class="error-msg"><?php echo $data['regEmailErr']; ?></span>
                    </div>
                    <div class="signup-password">
                        <label>Password<span class="required">*</span></label>
                        <img class="icon unactive" src="<?php echo URLROOT; ?>img/icons/lock.png">
                        <img class="icon active" src="<?php echo URLROOT; ?>img/icons/lock-a.png">
                        <input name="password" type="password" value="<?php echo $data['password']; ?>" />
                        <span class="error-msg"><?php echo $data['regPassErr']; ?></span>
                    </div>
                    <button name="register" type="submit" class="overlay-button">Sign Up</button>
                </form>
            </div>
            <div class="overlay-panel overlay-right">
                <form class="panel-form" action="<?php echo URLROOT; ?>home/login" method="post">
                    <h2 class="main-heading">Login</h2>
                    <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
                    <hr class="blue-line">
                    <div class="login-email">
                        <label>Email<span class="required">*</span></label>
                        <img class="icon unactive" src="<?php echo URLROOT; ?>img/icons/mail.png">
                        <img class="icon active" src="<?php echo URLROOT; ?>img/icons/mail-a.png">
                        <input name="email" type="email" value="<?php echo $data['email']; ?>" />
                        <span class="error-msg"><?php echo $data['logEmailErr']; ?></span>
                    </div>
                    <div class="login-password">
                        <label>Password<span class="required">*</span></label>
                        <img class="icon unactive" src="<?php echo URLROOT; ?>img/icons/lock.png">
                        <img class="icon active" src="<?php echo URLROOT; ?>img/icons/lock-a.png">
                        <input name="password" type="password" value="<?php echo $data['password']; ?>" />
                        <span class="error-msg"><?php echo $data['logPassErr']; ?></span>
                    </div>
                    <button name="login" type="submit" class="overlay-button">Login</button>
                    <a href="#" class="icon">Forgot?</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST["register"])) {
    echo "<script>
            $('#container').addClass('left-panel-active');
        </script>";
}
?>

<?php require APPROOT . '/views/includes/footer.php'; ?>