<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Welcome - Quiet Soul</title>

  <a href="/" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>

  <!-- <a href="logout" id="" style="float: right;">
    logout
  </a> -->
  <form action="logout" method="POST">
    @csrf
    <button type="submit">logout</button>
  </form>

  <style>
    body {
      background-color: #fff8dc;
      font-family: 'Open Sans', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0;
      padding: 20px;
    }

    .container {
      text-align: center;
      margin-bottom: 20px;
    }

    h2, h3 {
      color: goldenrod;
      margin-bottom: 10px;
    }

    p {
      color: #333;
      margin-bottom: 20px;
    }

    .emotion-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
      max-width: 800px;
      margin: 0 auto;
    }

    .emotion-btn {
      background-color: white;
      border: 2px solid goldenrod;
      border-radius: 10px;
      padding: 15px;
      font-size: 16px;
      color: goldenrod;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
    }

    .emotion-btn:hover, .emotion-btn.selected {
      background-color: goldenrod;
      color: white;
    }
  </style>

<script>
  let selectedEmotions = [];

  function selectEmotion(button) {
  // إزالة التحديد من جميع الأزرار
  const buttons = document.querySelectorAll('.emotion-btn');
  buttons.forEach(btn => btn.classList.remove('selected'));

  // إعادة تعيين المصفوفة
  selectedEmotions = [];

  // تحديد الزر الذي تم النقر عليه
  button.classList.add('selected');
  const emotion = button.innerText;
  selectedEmotions.push(emotion);
  document.getElementById('emotions').value = emotion.replace(/\p{Emoji}/gu, '').trim();
}

  function handleContinue() {
    if (selectedEmotions.length === 0) {
      alert("Please select at least one emotion before continuing.");
      return;
    }
    // Save selected emotions to localStorage
    localStorage.setItem('selectedEmotions', JSON.stringify(selectedEmotions));
    // Navigate to the next page
    // window.location.href = 'page7.html'; // أو اسم الصفحة يلي بدك تنتقلي إلها
  }
</script>

<link rel="stylesheet" href="Project/style.css">
</head>

<body>

  <div class="container">
    <h2>Welcome dear friend!</h2>
    <p>You are now in a space made just for you. We're here to listen, support, and help you find balance.</p>
    <h3>What is your emotion-mood to have the ability for supporting you?</h3>
    <p>Please feel free to select more than one emotion that reflects how you're feeling right now.</p>
  </div>

  <form id="emotion-form" action="category" method="GET">
    @csrf
    <div class="emotion-grid">
      @foreach ($feelings as $feeling)
      <button type="button" class="emotion-btn {{ (optional($last_feeling)->feeling == $feeling->name) ? 'selected' : ''}}" onclick="selectEmotion(this)">{{$feeling->name}} {{ $feeling->emoji }}</button>
      @endforeach
      <input type="hidden" name="emotions" id="emotions" value="{{ optional($last_feeling)->feeling }}">
    </div>
    <style>
        .continue-btn {
  background-color: goldenrod;
  color: white;
  border: none;
  border-radius: 25px;
  padding: 12px 30px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 30px;
  transition: background-color 0.3s;
}

.continue-btn:hover {
  background-color: #7d5d0c;
}
      
      </style>
      
      <div style="text-align: center">
        <button type="submit" class="continue-btn" onclick="handleContinue()">Continue</button>
      </div>
  </form>
  <script src="Project/script.js"></script>
</body>
</html>