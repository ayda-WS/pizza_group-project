<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Pizza Registration </title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: url('pizza_bg.jpg') no-repeat center center/cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 8px;
      width: 350px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      text-align: center;
      padding-top: 10px; 
      padding-bottom: 40px; 
      padding-left: 30px; 
      padding-right: 50px; 
      background: rgba(255, 255, 255, 0.6);
    }

    .login-container h2 {
      margin-bottom: 30px;
      font-size: 26px;
      font-weight: bold;
      color: #5c3d1e;
      cursor: default;
    }

    .login-container input[type="email"],
    .login-container input[type="number"],
    .address, .phone-num {
   
    width: 100%; 
    padding: 10px; 
    margin: 15px 0;
    border-radius: 12px;
    border-color: #505050;
    border-width: 2px;
    border-style: solid;
    background: rgba(255, 255, 255, 0.8)
    }

    .login-container .name, .password {

    width: 45%;
    padding: 10px;
    margin: 15px; 
    margin-left: 15px;
    margin-right: 5px;
    border-radius: 12px;
    border-color: #505050;
    border-width: 2px;
    border-style: solid;
    background: rgba(255, 255, 255, 0.8);
    align-items: center;
    display: flex;
    justify-content: center;


    }

    .options {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      margin: 10px 0;
    }

    .options label {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .login-btn {
      background: #b8432e;
      color: #fff;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      margin: 15px 0;
      border-radius: 20px;
      margin-bottom: 0;
    }

    .login-btn:hover {
      background: #a03827;
    }

    .divider {
      margin: 20px 0;
      font-size: 14px;
      color: #666;
      position: relative;
    }

    .divider::before, .divider::after {
      content: "";
      position: absolute;
      width: 30%;
      height: 1px;
      top: 50%;
      background: #ccc;
    }

    .divider::before { left: 0; }
    .divider::after { right: 0; }

    .social-login {
      display: flex;
      justify-content: space-around;
    }

    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 45%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background: #fff;
      cursor: pointer;
      font-size: 14px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .social-btn:hover {

      background-color: #d9d9d9;
    }

    .social-btn img {
      width: 18px;
      margin-right: 8px;
    }
    #remember {

    color: #505050;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

    }

    a, .account-question {

    color: #505050;
    text-decoration: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    
    }

    a:hover {
    
    color: #000000;
    
    }

    #name, #password {

    display: flex;
    justify-content: center;

    }


    

  </style>
</head>
<body>
  <div class="login-container">
    
    <h2>Welcome!</h2>

    <!-- changed: php form -->
    <form method="post" action="registration_action.php">

    <div id="name">
      <input type="text" class="name" placeholder="First Name" required>
      <input type="text" class="name" placeholder="Last Name" required>
    </div>

      <input type="email" placeholder="Email" required>
      <input type="text" class="phone-num" placeholder="Phone Number" required>
      <input type="text" class="address" placeholder="Address" required>

    <div id="password">
      <input type="password" class="password" placeholder="Password" required>
      <input type="password" class="password" placeholder="Confirm Password" required>
    </div>
      


      <button type="submit" class="login-btn">Sign Up</button>
      <p class="account-question"> Already have an account? <a href="#">Login</a>.</p>
    </form>
    <div class="divider">or continue with</div>

    <div class="social-login">

      <div class="social-btn">
        <img src="facebook.png" alt="Facebook"> Facebook
      </div>

      <div class="social-btn">
        <img src="google.png" alt="Google"> Google
      </div>

    </div>
  </div>
</body>
</html>