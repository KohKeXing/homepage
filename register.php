<?php
session_start();
require_once 'helper.php';

$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Captcha for security
$rand = rand(9999, 1000);

// Handling login form submission
if (isset($_POST['login'])) {
    $captcha = $_POST['captcha'];
    $captcha_rand = $_POST['captcha-rand'];

    if ($captcha != $captcha_rand) {
        echo "<script>alert('Invalid captcha value');</script>";
    } else {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pwd = mysqli_real_escape_string($con, $_POST['password']);
        $select_query = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
        $result = mysqli_num_rows($select_query);
        
        if ($result > 0) {
            $user = mysqli_fetch_assoc($select_query);
            // Verify the password
            if (password_verify($pwd, $user['userPw'])) {
                $_SESSION['user_email'] = $email;  // Save session for user email
                echo "<script>alert('Login success'); document.location.href = 'home.php';</script>";
            } else {
                echo "<script>alert('Invalid email or password');</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    }
}

// Handling signup form submission
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);
    $captcha = mysqli_real_escape_string($con, $_POST['captcha']);
    $captcha_rand = $_POST['captcha-rand'];

    // Check if captcha is correct
    if ($captcha != $captcha_rand) {
        echo "<script>alert('Invalid captcha value');</script>";
    } elseif ($password !== $password2) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        $insert_query = "INSERT INTO user (name, email, userPw) VALUES ('$name', '$email', '$hashedPassword')";
        
        if (mysqli_query($con, $insert_query)) {
            $_SESSION['user_email'] = $email;
            echo "<script>alert('Registration successful'); document.location.href = 'home.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Log In</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .container {
            display: flex;
            width: 800px;
            height: 500px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .image-container {
            flex: 1;
            background: url('image/background3.png') no-repeat center;
            background-size: cover;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
            position: relative;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #333;
            border: none;
            border-bottom: 1px solid #777;
            outline: none;
            background: transparent;
        }

        .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #777;
            pointer-events: none;
            transition: 0.5s;
        }

        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #009688;
            font-size: 12px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
            height: 40px;
            background: #009688;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            color: white;
            font-weight: 500;
        }

        .login-register {
            font-size: 14px;
            text-align: center;
            margin-top: 20px;
        }

        .login-register a {
            color: #009688;
            text-decoration: none;
            font-weight: 600;
        }

        .captcha-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .captcha {
            background: #f0f0f0;
            padding: 5px 10px;
            font-size: 18px;
            font-weight: 700;
            border-radius: 4px;
            margin-right: 10px;
        }

        .captcha-input {
            flex: 1;
            position: relative;
        }

        .captcha-input input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #333;
            border: 1px solid #777;
            border-radius: 4px;
            outline: none;
        }

        .captcha-input label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #777;
            pointer-events: none;
            transition: 0.3s;
        }

        .captcha-input input:focus ~ label,
        .captcha-input input:valid ~ label {
            top: 0;
            left: 10px;
            font-size: 12px;
            background: white;
            padding: 0 5px;
        }
        
        #message {
            font-size: 14px;
            margin-top: 5px;
        }
        
        /* New Close Button Styles */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: #f0f0f0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .close-btn:hover {
            background: #e0e0e0;
            transform: rotate(90deg);
        }

        .close-btn::before,
        .close-btn::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 2px;
            background-color: #666;
            transform: rotate(45deg);
        }

        .close-btn::after {
            transform: rotate(-45deg);
        }
        
        @media (max-width: 468px) {
    body {
        padding: 10px;
    }

    .container {
        width: 100%;
        height: auto;
        flex-direction: column;
    }

    .image-container {
        display: none; /* Hide image on smaller screens */
    }

    .form-container {
        width: 100%;
        padding: 20px;
    }

    h2 {
        font-size: 20px;
        margin-bottom: 15px;
    }

    .input-box {
        margin-bottom: 15px;
    }

    .input-box input {
        padding: 8px 0;
        font-size: 14px;
    }

    .input-box label {
        font-size: 14px;
    }

    .remember-forgot {
        font-size: 12px;
        margin-bottom: 15px;
    }

    .btn {
        height: 35px;
        font-size: 14px;
    }

    .login-register {
        font-size: 12px;
        margin-top: 15px;
    }

    .captcha-container {
        flex-direction: column;
    }

    .captcha-input {
        width: 100%;
    }

    .close-btn {
        top: 10px;
        right: 10px;
        width: 35px;
        height: 35px;
    }

    .captcha {
        font-size: 16px;
    }

    .captcha-input input {
        font-size: 14px;
        padding: 8px;
    }

    .captcha-input label {
        font-size: 14px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="form-container">
            <div class="close-btn" onclick="window.location.href='homepage.php'"></div> 
            
            <!-- Login Form -->
            <div class="form-box login">
                <form action="" method="post">
                    <h2>Sign In</h2>
                    
                    <div class="input-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    
                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                        <a href="resetpassword.php">Forgot password?</a>
                    </div>

                  

                    <input type="submit" class="btn" name="login" value="Sign In">

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign up</a></p>
                    </div>
                </form>
            </div>

            <!-- Register Form (Hidden by default) -->
            <div class="form-box register" style="display:none;">
                <form method="post">
                    <h2>Sign Up</h2>
                    
                    <div class="input-box">
                        <input type="text" name="name" required>
                        <label>Username</label>
                    </div>
                    
                    <div class="input-box">
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    
                    <div class="input-box">
                        <input type="password" name="password" id="password" required>
                        <label>Password</label>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password2" id="password2" onkeyup="checkPassword()" required>
                        <label>Confirm Password</label>
                        <p id="message"></p>
                    </div>

                    <div class="captcha-container">
                        <div class="captcha">
                            <?php echo $rand; ?>
                        </div>
                        <div class="captcha-input">
                            <input type="text" name="captcha" required>
                            <label>Enter Captcha</label>
                        </div>
                    </div>

                    <input type="hidden" name="captcha-rand" value="<?php echo $rand; ?>">

                    <div class="remember-forgot">
                        <label><input type="checkbox" required> I agree to the terms & conditions</label>
                    </div>

                    <input type="submit" name="signup" class="btn" value="Sign Up">
                    
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const loginForm = document.querySelector('.form-box.login');
        const registerForm = document.querySelector('.form-box.register');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');

        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        });

        loginLink.addEventListener('click', (e) => {
            e.preventDefault();
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });

        function checkPassword() {
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("password2").value;
            let message = document.getElementById("message");

            if (password.length != 0) {
                if (password == confirmPassword) {
                    message.textContent = "Passwords match";
                    message.style.color = "#3ae374";
                } else {
                    message.textContent = "Passwords don't match";
                    message.style.color = "#ff4d4d";
                }
            } else {
                message.textContent = "";
            }
        }
    </script>
</body>
</html>
