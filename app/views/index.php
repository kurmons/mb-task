<?php require APPROOT . '/views/includes/header.php'; ?>

<div id="background">
    <div id="form-bg"></div>
    <div class="container" id="container">
        <div class="form-container left-container">
            <div class="sign-up-container">
                <h2>Don't have an account?</h2>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipsicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="ghost" id="signUp">SIGN UP</button>
            </div>
        </div>

        <div class="form-container right-container">
            <div class="sign-in-container">
                <h2>Have an account?</h2>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipsicing elit.</p>
                <button class="ghost" id="signIn">LOGIN</button>
            </div>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>Sign Up</h2>
                    <form action="POST">
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <button id="signIn">Sign Up</button>
                    </form>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Login</h2>
                    <form action="POST">
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <button id="signUp">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <?php require APPROOT . '/views/includes/footer.php'; ?>