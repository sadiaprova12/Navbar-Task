<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/images/header_logo.png" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ url('login.css') }}" />
</head>
<body>
    <div class="login-container">

        <div class="login-header">
        
        <img src="{{ url('header_logo.png') }}" alt="University Logo">
        
        <p>Sign in with your organizational ID Number</p>
        
        </div>
        
        <form class="login-form">
        
        <div class="input-group">
        
        <!-- <label for="user-id">User ID</label> -->
        
        <input type="text" id="user-id" placeholder="User ID">
        
        </div>
        
        <div class="input-group">
        
        <!-- <label for="password">Password</label> -->
        
        <input type="password" id="password" placeholder="Password">
        
        </div>
        
        <button type="submit">SIGN IN</button>
        
        </form>
        
        <div class="login-footer">
        
        <a href="#">Forgot your password? Click here</a>
        
        <a href="#">Visit Uttara University Official Website</a>
        
        </div>
        
        </div>
</body>
</html>