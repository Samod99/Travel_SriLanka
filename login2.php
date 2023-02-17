<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travel Sri Lanka Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="blueBg">
                <div class="box signin">
                    <h2>Already Have an account ?</h2>
                    <button class="signinBtn">sign in</button>
                </div>
                <div class="box signup">
                    <h2>Don't Have an account ?</h2>
                    <button class="sigupBtn">sign up</button>
                </div>
            </div>
            <div class="formBx">
                <div class="form signinForm">
                    <form action="process3.php" method="post">
                        <h2>Sign In</h2>
                        <input type="text" placeholder="Username" name="uname">
                        <input type="password" placeholder="Password" name="password">
                        <input type="submit" name="submit" value="Login">
                        <a href="#" class="forgot">Forgot Password</a>
                    </form>
                </div>

                <div class="form signupForm">
                    <form  action="insert.php" method="post">
                        <h2>Sign Up</h2>
                        <input type="text" placeholder="Username" name="uname">
                        <input type="text" placeholder="Email Address"name="email">
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder=" Confirm Password" name="cpass">
                        <input type="text" placeholder="Telphone no" name="tno">
                        <input type="submit" name="submit" value="Register" >
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="login.js"></script>
    </body>
</html>