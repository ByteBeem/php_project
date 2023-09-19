<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <?php

            
                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                   

                    if ($errorMessage) {
                        echo '<span class="error-message">' . $errorMessage . '</span>';
                    } else {
                        echo '<span>Welcome back!</span>';
                    }
                } else {
                    echo '<span>Have an Account?</span>';
                }
                ?>
                <header>Login</header>
            </div>

            <form action="index.php" method="post">
                <div class="input-field">
                    <input type="email" class="input" name="email" placeholder="email" id="email" required>
                    <div class="user-icon">
                        <img src="css/u.jpg">
                    </div>
                </div>
                <div class="input-field">
                    <input type="password" class="input" name="password" placeholder="password" id="password" required>
                    <div class="user-icon">
                        <img src="css/p.avif">
                    </div>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>
            </form>
            
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" name="check" id="check">
                    <label for="check">Remember me</label>
                </div>
    
                <div class="right">
                    <label><a href="#">Forgot Password</a></label>
                </div>
    
                <div class="center">
                    <label><a href="project.html">Create Account</a></label>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>
