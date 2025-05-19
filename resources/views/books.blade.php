<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Books - Quiet Soul</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
  <a href="category" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>
  
  <style>
    body {
      background-color: #fff8dc;
      font-family: 'Open Sans', sans-serif;
      margin: 0;
      padding: 20px;
      font-size: 18px;
    }

    h2, h3 {
      color: goldenrod;
      text-align: center;
      font-size: 26px;
    }

    p {
      text-align: center;
      color: #333;
      margin: 10px auto;
      max-width: 700px;
    }

    select {
      display: block;
      margin: 20px auto;
      padding: 10px;
      font-size: 16px;
      border-radius: 8px;
      border: 1px solid goldenrod;
    }

    .book {
      border: 2px solid goldenrod;
      border-radius: 10px;
      padding: 15px;
      margin: 15px auto;
      max-width: 800px;
      transition: transform 0.3s;
      background-color: white;
    }

    .book-entry {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #fff;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(218, 165, 32, 0.6);
      transition: transform 0.3s;
    }

    .book-entry:hover {
      transform: scale(1.03);
    }

    .book-text {
      flex: 1;
      margin-left: 20px;
    }

    .book-img {
      width: 120px;
      height: auto;
      border-radius: 10px;
    }

    .book:hover {
      transform: scale(1.03);
    }

    .book-title {
      font-weight: bold;
      color: goldenrod;
      margin-bottom: 5px;
      font-size: 20px;
    }

    .book-desc {
      margin-bottom: 8px;
      color: #444;
      font-size: 16px;
    }
  </style>

  <script>
    function filterBooks() {
      var language = document.getElementById("languageSelect").value;
      var arabicBooks = document.querySelectorAll('.arabic-book');
      var englishBooks = document.querySelectorAll('.english-book');

      arabicBooks.forEach(book => {
        book.style.display = (language === "arabic") ? "block" : "none";
      });

      englishBooks.forEach(book => {
        book.style.display = (language === "english") ? "block" : "none";
      });

      if(language==="all") {
        arabicBooks.forEach(book=> book.style.display="block");
        englishBooks.forEach(book=> book.style.display="block");
      }
    }
  </script>

<link rel="stylesheet" href="Project/style.css">
</head>
<body>

  <h2>Discover Inspiring books for your soul</h2>
  <p>Sometimes, all we need is the right book to find clarity, comfort, or inspiration. Choose your preferred language and explore our handpicked selection of books available on mobile apps.</p>
  <p dir="rtl">اكتشف كتبًا ملهمة لروحك. أحيانًا، كل ما نحتاجه هو الكتاب المناسب لنجد وضوحًا، راحة، أو إلهامًا. اختر لغتك المفضلة واستكشف مجموعتنا المختارة بعناية من الكتب المتوفرة على التطبيقات</p>
  <body dir="ltr"> 

  <select id="languageSelect" onchange="filterBooks()">
    <option value="arabic">Arabic Books - كتب عربية</option>
    <option value="english">English Books - كتب إنجليزية</option>
    <option value="all">All Books - كل الكتب</option>
  </select>

  <!-- Arabic Books -->
  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
        <div class="book-title">فن اللامبالاة - مارك مانسون</div>
        <div class="book-desc">كتاب يساعدك على تقبّل الحياة كما هي، ويمنحك القوة لتجاوز الضغوط الاجتماعية والنفسية.</div>
        <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
      </div>
      <img src="Project/abjad.jpg" alt="App Image" class="book-img">
    </div>
  </div>


  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">لا تهتم بصغائر الأمور - ريتشارد كارلسون</div>
    <div class="book-desc">يرشدك إلى كيفية الحفاظ على الهدوء في خضم ضغوط الحياة اليومية.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق كتبي</div>
  </div>
    <img src="Project/kutube.jpg" alt="App Image" class="book-img">
   </div>
 </div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">أراك على القمة - زيغ زيغلر</div>
    <div class="book-desc">كتاب تحفيزي يعزز الثقة بالنفس ويشجع على الطموح العالي.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق اقرأ لي</div>
  </div>
    <img src="Project/ikraa li.jpg" alt="App Image" class="book-img">
   </div>
 </div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">قوة الآن - إيكهارت تول</div>
    <div class="book-desc">يعلمك كيفية العيش في اللحظة والتخلص من التفكير السلبي والاكتئاب.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
  </div>
    <img src="Project/abjad.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">أفكار صغيرة لحياة كبيرة - كريم الشاذلي</div>
    <div class="book-desc">يعطيك دفعة إيجابية لتغيير نظرتك للحياة والتعامل مع التحديات.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق كتبي</div>
  </div>
    <img src="Project/kutube.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">استرداد الذات - ناعمة الهاشمي</div>
    <div class="book-desc">رحلة في بناء الثقة بالنفس والتعافي العاطفي بطريقة مبسطة.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق نون أكاديمي</div>
  </div>
    <img src="Project/noun.jpg" alt="App Image" class="book-img">
  </div>
</div>

  

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">كوميديا الاكتئاب - علا ديوب</div>
    <div class="book-desc">أسلوب ساخر لمساعدة من يعاني القلق أو العزلة في فهم نفسه.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
  </div>
    <img src="Project/abjad.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">السر - روندا بيرن</div>
    <div class="book-desc">يعزز التفكير الإيجابي ويحفزك لتحقيق أهدافك بطريقة غير تقليدية.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق اقرأ لي</div>
  </div>
    <img src="Project/ikraa li.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">في قلبي أنثى عبرية - خولة حمدي</div>
    <div class="book-desc">قصة مليئة بالأمل والإرادة تساعد على تخطي العزلة والتردد.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
  </div>
    <img src="Project/abjad.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">ابتسم أنت في بغداد - علي نجم</div>
    <div class="book-desc">مجموعة من الخواطر التي تمنحك راحة نفسية وتزيد من تقبلك لذاتك.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق كتبي</div>
  </div>
    <img src="Project/kutube.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">الهدوء - سوزان كين</div>
    <div class="book-desc">يشجعك على تقبل الانطوائية كقوة وليست ضعفًا، ويدعمك لتتألق بطريقتك.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
  </div>
    <img src="Project/abjad.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">الرجوع إلى الذات - مالك بن نبي</div>
    <div class="book-desc">يعالج الانفصال الذاتي بطريقة فلسفية تساعدك على فهم ذاتك والتصالح معها.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق نون أكاديمي</div>
  </div>
    <img src="Project/noun.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book arabic-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">حديث الصباح - أدهم شرقاوي</div>
    <div class="book-desc">خواطر صباحية تمنحك دفعة أمل وصفاء ذهني لبداية يوم جديد.</div>
    <div class="book-desc"><strong>متوفر على:</strong> تطبيق أبجد</div>
  </div>
    <img src="Project/abjad.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <!-- English Books -->
  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">The Power of Now - Eckhart Tolle</div>
    <div class="book-desc">A guide to spiritual enlightenment that helps readers find peace by living in the present moment.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Atomic Habits - James Clear</div>
    <div class="book-desc">Learn how tiny changes can lead to remarkable results in your personal and professional life.</div>
    <div class="book-desc"><strong>Available on:</strong> Kindle App</div>
  </div>
    <img src="Project/kindle.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Can’t Hurt Me - David Goggins</div>
    <div class="book-desc">A memoir of resilience and mental strength that pushes you to overcome any obstacle.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">You Are a Badass - Jen Sincero</div>
    <div class="book-desc">A motivating and humorous guide to creating a life you love and embracing your inner power.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">The Subtle Art of Not Giving a F*ck - Mark Manson</div>
    <div class="book-desc">This book teaches how to focus on what truly matters in life with honesty and courage.</div>
    <div class="book-desc"><strong>Available on:</strong> Scribd App</div>
  </div>
    <img src="Project/scribd.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Grit - Angela Duckworth</div>
    <div class="book-desc">Explore how passion and perseverance are key to achieving long-term goals.</div>
    <div class="book-desc"><strong>Available on:</strong> Kindle App</div>
  </div>
    <img src="Project/kindle.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Daring Greatly - Brené Brown</div>
    <div class="book-desc">Learn how embracing vulnerability can lead to strength and meaningful connections.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
  <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Think Like a Monk - Jay Shetty</div>
    <div class="book-desc">Practical advice on reducing stress and improving focus from a former monk.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">The Happiness Project - Gretchen Rubin</div>
    <div class="book-desc">A personal journey and guide to creating more happiness in daily life.</div>
    <div class="book-desc"><strong>Available on:</strong> Kindle App</div>
  </div>
    <img src="Project/kindle.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Feeling Good - David D. Burns</div>
    <div class="book-desc">Based on cognitive therapy, this book offers tools to fight depression and improve mood.</div>
    <div class="book-desc"><strong>Available on:</strong> Kindle App</div>
  </div>
    <img src="Project/kindle.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">The Confidence Code - Katty Kay & Claire Shipman</div>
    <div class="book-desc">Discover what confidence really means and how to develop it.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Untamed - Glennon Doyle</div>
    <div class="book-desc">An empowering call to live authentically and let go of societal expectations.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">The Gifts of Imperfection - Brené Brown</div>
    <div class="book-desc">A guide to embracing your true self and living a wholehearted life.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Quiet - Susan Cain</div>
    <div class="book-desc">Celebrates the power of introverts in a world that can’t stop talking.</div>
    <div class="book-desc"><strong>Available on:</strong> Kindle App</div>
  </div>
    <img src="Project/kindle.jpg" alt="App Image" class="book-img">
  </div>
</div>

  <div class="book english-book">
    <div class="book-entry">
      <div class="book-text">
    <div class="book-title">Reasons to Stay Alive - Matt Haig</div>
    <div class="book-desc">A deeply moving book about surviving depression and finding hope.</div>
    <div class="book-desc"><strong>Available on:</strong> Audible App</div>
  </div>
    <img src="Project/audible.jpg" alt="App Image" class="book-img">
  </div>
</div>

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