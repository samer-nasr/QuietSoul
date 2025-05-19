
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiet Soul</title>

  <!-- إضافة خط Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!-- Header with Logo -->
<a href="/" id="logo-link">
  <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
</a>

  <style>

/* Add to your CSS file or inside <style> in each page */
  .site-header {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #fff8f0;
  padding: 10px 0;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.logo-img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #d4af37; /* لمسة ذهبية */
  transition: transform 0.3s ease;
}

.logo-img:hover {
  transform: scale(1.05);
}

.logo-link {
  text-decoration: none;
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
      height: 90vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 20px;
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
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 30px;
      color: #555;
      padding: 0 20px;
    }

    .circle-content .buttons button {
  background-color: goldenrod;
  color: white;
  border: none;
  padding: 10px 25px;
  margin: 10px;
  border-radius: 25px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.circle-content .buttons button:hover {
  background-color: #7d5d0c;
  transform: scale(1.05);
}

    .stats {
      background-color: goldenrod;
      color: white;
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 20px;
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

    .welcome-message {
  background-color: white;
  border-left: 8px solid goldenrod;
  border-radius: 15px;
  padding: 20px 30px;
  margin-bottom: 40px;
  max-width: 700px;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}


.close-btn {
  position: absolute;
  top: 8px;
  right: 10px;
  background: transparent;
  border: none;
  font-size: 20px;
  color: goldenrod;
  cursor: pointer;
  font-weight: bold;
  line-height: 1;
}
.welcome-bubble {
  position: fixed;
  bottom: 120px; /* تم رفعها فوق الـ stats */
  right: 20px;
  background-color: white;
  border: 2px solid goldenrod;
  border-radius: 20px;
  padding: 20px 25px 20px 20px;
  max-width: 300px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  z-index: 9999;
  font-family: 'Poppins', sans-serif;
  color: #444;
  font-size: 16px;
  line-height: 1.6;
}

.welcome-bubble::after {
  content: "";
  position: absolute;
  bottom: -15px;
  right: 30px;
  border-width: 10px;
  border-style: solid;
  border-color: white transparent transparent transparent;
  filter: drop-shadow(0 -2px 2px rgba(0,0,0,0.1));
}


    .site-title {
  font-family: 'Great Vibes', cursive;
  font-size: 70px;
  color: #fff8f0;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  margin-bottom: 30px;

  /* التأثير */
  opacity: 0;
  transform: translateY(-20px);
  animation: fadeInTop 1.5s ease-out forwards;
}

/* تعريف الحركة */
@keyframes fadeInTop {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
  </style>

<script defer>
  function goToLogin() {
    window.location.href = "page2.html";
  }

  function goToRegister() {
    window.location.href = "page3.html";
  }
</script>
<script>
  function closeBubble() {
    const bubble = document.getElementById('welcomeBubble');
    if (bubble) {
      bubble.style.display = 'none';
    }
  }
</script>
<link rel="stylesheet" href="Project/style.css">

</head>

<body>

  <section class="hero">
    <h1 class="site-title">Quiet Soul</h1>

    <div class="welcome-bubble" id="welcomeBubble">
      <button class="close-btn" onclick="closeBubble()">×</button>
      <p>You are now in a space made just for you. We're here to listen, support, and help you find balance.</p>
    </div>
    <div class="circle-content">
      <h4>About Us</h4>
      <h1>Welcome to Quiet Soul website! You've just entered the right space that understands your feelings, 
        supports your mind, and helps you find comfort in every breath; and keep in mind here you're not alone.
      </h1>
      
      <div class="buttons">
        <a href="login"><button>Login</button></a>
        <a href="register"><button>Register</button></a>
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