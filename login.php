<!DOCTYPE html>
<html lang="en">
    
    <?php 
        include('./php/link.php');
    ?>
    <body>
    <div class="wrapper-container">
        <div class="wrapper-login">
            <div class="title-text">
                <div class="title login">
                Login Form
                </div>
                <div class="title signup">
                Signup Form
                </div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
                </div>
                <div class="form-inner">

                <form method="post" action="./php/db_login.php" class="login" >
                    <div class="field">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="field">
                        <input type="password" name="pdw" placeholder="Password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="">Signup now</a>
                    </div>
                    <div class="signup-link">
                        <a href="./index.php">Back to the website</a>
                    </div>
                </form>
                <?php include('./php/db_login.php'); ?>
                

                <form method="post" action="./php/db_signup.php" metho class="signup">
                    <div class="field">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" minlength="8" name="pdw" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" minlength="8" name="cpdw" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="Signup" value="Signup">
                    </div>
                </form>
                </div>
            </div>
            <?php include('./php/db_signup.php'); ?>
        </div>
    </div>
    
        <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
            });
        </script>
    </body>
</html>