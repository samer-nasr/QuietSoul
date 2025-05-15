<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Music - Quiet Soul</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <a href="category" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>

  <style>
    body {
      background-color: #fff8dc;
      font-family: 'Open Sans', sans-serif;
      text-align: center;
      padding: 40px 20px;
    }

    h2 {
      color: goldenrod;
      margin-bottom: 30px;
    }

    .video-wrapper {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }

    iframe {
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(218, 165, 32, 0.4);
      width: 300px;
      height: 170px;
    }

    iframe {
  border-radius: 15px;
  box-shadow: 0 16px 40px rgba(218, 165, 32, 0.4);
  width: 300px;
  height: 170px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

iframe:hover {
  transform: scale(1.1);
  box-shadow: 0 0 25px rgba(218, 165, 32, 0.6);
}

    .back-btn {
      background-color: goldenrod;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }
  
    .back-btn:hover {
      background-color: #7d5d0c;
      transform: scale(1.05);
    }
  </style>


<link rel="stylesheet" href="Project/style.css">
</head>

<body>
  <h2>Let the music calm your soul!</h2>

  <div class="video-wrapper">
    @foreach($musics as $music)
    <iframe src="{{ $music->link }}" frameborder="0" allowfullscreen></iframe>
    @endforeach
  </div>
  <style>
    .back-btn {
      background-color: goldenrod;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }
  
    .back-btn:hover {
      background-color: #7d5d0c;
      transform: scale(1.05);
    }
  </style>
  
  <div style="text-align: center; margin-top: 40px;">
    <a href="category">
      <button class="back-btn">Back to Categories</button>
    </a>
  </div>
  <script src="Project/script.js"></script>
</body>
</html>