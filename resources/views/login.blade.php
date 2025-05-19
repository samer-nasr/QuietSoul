<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiet Soul System</title>

  <!-- إضافة خط Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <a href="/" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>

  <style>


    #logo-link {
      display: block;
      width: fit-content;
    }

    .logo-center {
      margin: 0 auto;
      text-align: center;
    }

    .logo-left {
      margin-left: 0;
    }
  </style>
</head><head>
  <style>
    #logo-link {
      display: block;
      width: fit-content;
    }

    .logo-center {
      margin: 0 auto;
      text-align: center;
    }

    .logo-left {
      margin-left: 0;
    }


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }

    body {
      background-color: gold;
      color: #333;
    }

    .hero {
      height: 91vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
      padding: 20px;
      text-align: center;
    }

    .circle-content {
      background: white;
      border-radius: 50%;
      width: 500px;
      height: 500px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
      padding: 30px;
    }

    .circle-content h4 {
      color: goldenrod;
      margin-bottom: 20px;
      font-size: 48px;
    }

    .circle-content h1 {
      font-size: 22px;
      margin-bottom: 15px;
      color: #555;
    }

    .circle-content p {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
      padding: 0 10px;
    }

    .circle-content button {
      background-color: goldenrod;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
    }

    .circle-content button:hover {
      background-color: #7d5d0c;
      transform: scale(1.05);
      box-shadow: 0 0 10px rgb(125, 93, 12, 0.5);
    }
    .circle-content button{
      transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .stats {
      background-color: goldenrod;
      color: white;
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 20px 20px;
      margin-top: -5px;
    }

    .stat-item {
      text-align: center;
    }

    .stat-item h2 {
      font-size: 14px;
      margin-bottom: 5px;
      color: #f9f6c8;
    }

    .stat-item p {
      font-size: 14px;
      color: rgb(241, 250, 251);
    }

    /* إضافة تأثير تكبير عند مرور الماوس على الرابط */
    .footer a {
      text-decoration: none;
      color: #7d5d0c;
      font-size: 14px;
      transition: transform 0.3s ease, font-size 0.3s ease;
    }

    /* تكبير النص عند المرور بالماوس */
    .footer a:hover {
      transform: scale(1.1); /* تكبير النص بنسبة 10% */
      font-size: 16px; /* تغيير حجم الخط */
    }

    h5 a {
      text-decoration: none;
      color: #7d5d0c;
      transition: transform 0.3s ease, font-size 0.3s ease;
    }

    h5 a:hover {
      transform: scale(1.1); /* تكبير النص عند المرور */
      font-size: 16px; /* تغيير حجم الخط */
    }

  </style>

<link rel="stylesheet" href="Project/style.css">

</head>
<body>

  <section class="hero">
    <div class="circle-content">
      <h4>Login</h4>
      <div class="container">
        <form action="login_user" method="POST">
            @csrf
         <h2> <input type="email" name="email" placeholder="Enter your email" required /></h2><br>
         @error('email')
         <div style="color: red;">{{ $message }}</div>
         @enderror
         <h3> <input type="password" name="password" placeholder="Enter your password" required /></h3><br>
         <h4><button type="submit">Login</button></button></h4>
         <div class="footer">
          <!-- رابط "Forgot Password" مع تأثير -->
          <a href="forgetpassword">Forgot Password?</a>
        </div> <br>
        <!-- إضافة الرابط "Register Now" هنا مع تأثير -->
        <h5><span> I don't have an account. <a href="register">Register Now</a></span></h5>
      </div>
    </div>
  </section>

  <section class="stats">
    <div class="stat-item">
      <h2>1</h2>
      <p>Balance</p>
    </div>
    <div class="stat-item">
      <h2>2</h2>
      <p>Hope</p>
    </div>
    <div class="stat-item">
      <h2>3</h2>
      <p>Strength</p>
    </div>
    <div class="stat-item">
      <h2>4</h2>
      <p>Healing</p>
    </div>
  </section>
  <script src="Project/script.js"></script>
</body>
</html>