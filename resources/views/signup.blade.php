<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

            <header>Sign Up</header>
            <form action="" method="post">
            <div class="field input">
                <label for="Username">Username</label>
                <input type="text" name="Username" id="username" autocomplete="off" required>
     </div>
            <div class="field input">
                <label for="Username">Address</label>
                <input type="text" name="address" id="address" autocomplete="off" required>
    </div>
    <div class="field input">
        <label for="Username">Email</label>
        <input type="email" name="email" id="email" autocomplete="off" required>
</div>
    <div class="field input">
        <label for="Phone">Phone</label>
        <input type="number" name="phone" id="phone" autocomplete="off" required>
</div>
<div class="field input">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" autocomplete="off" required>
</div>
<div class="field">
  <input type="submit" value="Login" class="btn" name="submit" required>  
</div>
<div class="links">
    Already have an account? <a href="index.html">Sign in</a>
</div>
</form>
        </div>
    </div>
</body>
</html>