<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Quiet Soul System</title>

  <a href="category" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif; /* تغيير الخط إلى Open Sans */
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
      box-shadow: 0 16px 40px rgba(0,0,0,0.4);
      padding: 20px;
    }

    .circle-content h4 {
      color: goldenrod; /* تغيير اللون إلى الذهب */
      margin-bottom: 10px;
      font-size: 45px;
    }

    .circle-content h1 {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 30px;
      color: #555;
      padding: 0 20px;
    }

    .circle-content p {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
      padding: 0 10px;
    }

    .circle-content button {
      background-color: goldenrod; /* جعل اللون ذهبي للأزرار */
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
      transition: transform 0.3s ease-in-out;
    }

    .circle-content button:hover {
      background-color: #7d5d0c; /* تأثير تمرير الماوس على الزر */
      transform: scale(1.1);
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

    .stat-item p h3 {
      font-size: 14px;
      color: rgb(241, 250, 251);
    }

    /* تعديل حجم الخط للروابط */
    .footer a {
      text-decoration: none;
      color: goldenrod; /* اللون الذهب */
      font-size: 16px;
      transition: transform 0.3s ease-in-out;
    }

    .footer a:hover {
      transform: scale(1.1); /* تأثير تكبير الرابط عند التمرير */
      text-decoration: underline;
    }
  </style>

<link rel="stylesheet" href="Project/style.css">

</head>
<body>

  <section class="hero">
    <div class="circle-content">
      <h4>Reset Password</h4>
      <div class="container">
        <form action="forgot_password" method="POST">
            @csrf
          <h2> <input type="email" name="email" placeholder="Enter your email" required /> </h2><br>
          @error('email')
          <div class="alert alert-danger">
            {{ $message }}
          @enderror
          <h3> <button type="submit">Send Reset Link</button> </h3><br>
        </form>
        <div class="footer">
          <a href="login">Back to Login</a>
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