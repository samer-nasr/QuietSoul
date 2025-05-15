<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Support Categories - Quiet Soul</title>

  <a href="home" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>

  <style>
    body {
      background-color: #fff8dc;
      font-family: 'Open Sans', sans-serif;
      text-align: center;
      margin: 0;
      padding: 20px;
    }

    h2 {
      color: goldenrod;
      margin-bottom: 20px;
      margin-top: 40px;
    }

    p {
      color: #333;
      margin-bottom: 40px;
      font-size: 18px;
    }

    .categories {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* صف يحتوي على صورتين */
      gap: 40px;
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
    }

    .category-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .image-wrapper {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      overflow: hidden;
      border: 5px solid #fff8dc;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .image-wrapper img:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(218, 165, 32, 0.6);
    }

    .category-name {
      margin-top: 10px;
      font-size: 20px;
      font-weight: bold;
      color: goldenrod;
    }
  </style>

<link rel="stylesheet" href="Project/style.css">

</head>

<body>

  <h2>You are doing great!</h2>
  <p>Choose an activity that will recharge your soul and keep you moving forward!</p>

  <div class="categories">
    <div class="category-item">
      <a href="music">
      <div class="image-wrapper">
        <img src="Project/music2.jpg" alt="Music">
      </div>
    </a>
      <div class="category-name">Music</div>
    </div>

    <div class="category-item">
      <a href="sport">
      <div class="image-wrapper">
        <img src="Project/sport2.jpg" alt="Sports">
      </div>
    </a>
      <div class="category-name">Sports</div>
    </div>

    <div class="category-item">
      <a href="sites">
      <div class="image-wrapper">
        <img src="Project/relaxing.jpg" alt="Relaxing Sites">
      </div>
    </a>
      <div class="category-name">Relaxing Sites</div>
    </div>

    <div class="category-item">
      <a href="page11.html">
      <div class="image-wrapper">
        <img src="Project/books2.jpg" alt="Books">
      </div>
    </a>
      <div class="category-name">books</div>
    </div>

    <div class="category-item">
      <a href="page12.html">
      <div class="image-wrapper">
        <img src="Project/journaling1.jpg" alt="Diary">
      </div>
    </a>
      <div class="category-name">Diary</div>
    </div>

    <div class="category-item">
      <a href="page13.html">
      <div class="image-wrapper">
        <img src="Project/chats.jpg" alt="Chatting">
      </div>
    </a>
      <div class="category-name">Chat With Us</div>
    </div>

  </div>
  <script src="Project/script.js"></script>
</body>
</html>