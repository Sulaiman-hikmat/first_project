<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
            <div class="field input">
                <label for="Username">Username</label>
                <input type="text" name="Username" id="username" required>
     </div>
            <div class="field input">
                <label for="Username">Password</label>
                <input type="password" name="password" id="password" required>
    </div>
<div class="field">
  <input type="submit" value="Login" class="btn" name="submit" required>  
</div>
<div class="links">
    Don't have account? <a href="register.html">Sign Up Now</a>
</div>
</form>
        </div>
    </div>
</body>
</html>