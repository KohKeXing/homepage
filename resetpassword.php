<?php
require_once 'helper.php';

//initialize variables for error message
$emailError = $passwordError = "";

//handle from submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = trim($_POST["Email"]);
    $pasword = trim($_POST["resetpassword"]);
    $confirmPassword = trim($_POST["confirmpassword"]);
    
    //update regex patterns
    $emailValidation = '/^\S+@\S+\.\S+$/';
    
    //validate email
    if(!preg_match($emailValidation,$email)){
        $emailError = "Invalid email format";
    }
    
    //check password match
    if($password !== $confirmPassword){
        $passwordError = "Passwords do not match";
    }
    
    //if no erros,proceed with database update
    if(empty($emailError) && empty($passwordError)){
        //create connection
        $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        
        //check connection
        if($con->connect_error){
            die("Connection failed: " .$con->connect_error);  
        }
        
        //prepare the sql statement
        $stmt = $con->prepare("UPDATE user SET password = ? WHERE email = ?");
        $stmt->bind_param("ss",$password,$email); //no hashing here
        
        //execute the statement
        if($stmt->execute()){
            echo "Password reset successful.";
        }else{
            echo "Error updating record: " .$stmt->error;
        }
        
        //close the statement and connection
        $stmt->close();
        $con->close();
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
            position: relative; /* Ensure this is set for absolute positioning */
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
            top: 10px;
            right: 40px; /* Align with the form padding */
            width: 30px;
            height: 30px;
            background: transparent;
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
            transform: rotate(-90deg); /* Changed rotation direction */
        }

        .close-btn::before,
        .close-btn::after {
            content: '';
            position: absolute;
            width: 15px;
            height: 2px;
            background-color: #666;
            transform: rotate(45deg);
        }

         .close-btn::after {
        transform: rotate(-45deg);
        }
        
        /* Existing styles */

/* Mobile styles for screen width max 468px */
@media only screen and (max-width: 468px) {
    .container {
        flex-direction: column;
        width: 100%;
        height: auto;
    }

    .image-container {
        flex: 0;
        height: 200px; /* Adjust image height */
        background-size: cover;
        background-position: center;
    }

    .form-container {
        padding: 20px;
        height: auto; /* Allow content to fit */
        overflow: visible;
    }

    h2 {
        font-size: 20px; /* Reduce font size */
    }

    .input-box input {
        font-size: 14px;
    }

    .input-box label {
        font-size: 14px; /* Adjust label font size */
    }

    .btn {
        height: 35px; /* Adjust button height */
        font-size: 14px;
    }

    .login-register {
        font-size: 12px;
    }

    .close-btn {
        top: 5px;
        right: 10px;
        width: 25px;
        height: 25px;
    }

    .close-btn::before,
    .close-btn::after {
        width: 12px;
        height: 2px;
    }

    .close-btn:hover {
        transform: rotate(-90deg); /* Maintain rotation direction */
    }
    
    .captcha-container {
        flex-direction: column;
    }

    .captcha {
        margin-bottom: 10px;
    }

    .captcha-input input {
        font-size: 14px;
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
            <div class="form-box login">
                <form action="" method="post">
                    <h2>Reset Password</h2>
                    
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="email" name="Email" required >
                        <label>Email</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="password" name="resetpassword" required>
                        <label>Password</label>
                    </div>
                    
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="password" name="confirmpassword" required>
                        <label>Confirm Password</label>
                    </div>
                    
                    <input type="submit" class="btn" name="login" value="Reset Password">
                    
                    <div class="login-register">
                        <p>Don't have an account? <a href="register.php" class="register-link">Sign up</a></p>
                    </div>
                </form>
                <?php 
                if(!empty($emailError)){
                    echo "<div class='alert alert-danger'>$emailError</div>";
                }
                if(!empty($passwordError)){
                    echo "<div class='alert alert-danger'>$passwordError</div>";
                }
                ?>
                
            </div>
        </div>
    </div>
    <script src="form-validation.js"></script>

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit',function(event){
            var email = document.getElementById('Email').value;
            var password = document.getElementById('resetpassword').value;
            varr confirmPassword = document.getElementById('confirmpassword').value;
            
            if(!email.match(/^\$+@\S+\.\S+$/)){
                alert("Please enter a valid email address.");
                event.preventDefault();//prevent form submission
            }
            
            if(password.length < 10){
                alert("Password must be at least 10 characters long.");
                event.preventDefault();//prevent form submission
            }
            
            if(password !== confirmPassword){
                alert("Password not match.");
                event.preventDefault();//prevent form submission
            }
        });
    </script>
</body>
</html>