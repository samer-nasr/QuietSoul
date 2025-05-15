<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Quiet Soul Register</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="script.js" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
  <a href="/" id="logo-link">
    <img src="Project/LOGO.jpg" alt="Quiet Soul Logo">
  </a>
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif; 
    }

    body {
      background-size: cover;
      background-position: center;
      background-color: gold;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    .container {
      background-color: white; /* اللون الخلفي الأبيض مع شفافية */
      padding: 40px;
      border-radius: 10px;
      width: 400px;
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
      text-align: center;
      overflow-y: auto;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: goldenrod; /* نفس اللون المستخدم للأزرار */
    }

    input, select, button {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 25px; /* جعل الحواف دائرية */
      border: 1px solid #ddd;
    }

    button {
      background-color: goldenrod; /* نفس اللون للأزرار */
      color: white;
      cursor: pointer;
      font-size: 16px;
      transition: all 0.3s ease;
      transform: scale(1);
    }

    button:hover {
      background-color: #7d5d0c; /* لون الخلفية عند التمرير */
      transform: scale(1.05);
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 8px;
      font-size: 14px;
      color: goldenrod; /* اللون المناسب للـ labels */
    }

    .footer {
      margin-top: 20px;
      font-size: 14px;
      color: #333;
    }

    .footer a {
      text-decoration: none;
      color: goldenrod; /* اللون للأزرار في روابط التذييل */
    }

    .footer a:hover {
      text-decoration: underline;
    }

    legend {
      font-size: 16px;
      color: goldenrod; /* نفس اللون للعناوين */
      margin-bottom: 10px;
    }

    .radio-group {
      display: flex;
      justify-content: space-evenly;
      margin-bottom: 20px;
    }

    .checkbox-group {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 20px;
    }

    .checkbox-group label {
      margin-left: 10px;
    }

    /* This will adjust the margin for the first checkbox (Reading) */
    .checkbox-group label:first-child {
      margin-left: 0;
    }

  </style>

<link rel="stylesheet" href="Project/style.css">

</head>
<body>
  <div class="container">
    <h2>Create Account</h2>
    <form action="register" method="POST">
        @csrf
      <input type="text" id="reg-name" placeholder="Full Name" required name="name"><br><br>
      @error('name')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <input type="email" id="reg-email" placeholder="Email" required name="email"><br><br>
      @error('email')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <input type="password" id="reg-password" placeholder="Password" required name="password"><br><br>
      @error('password')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <input type="password" id="reg-Conf" placeholder="Confirm Password" required name="confirm_password"><br><br>
      @error('confirm_password')
      <div style="color: red;">{{$message}}</div>
      @enderror
      
      <legend>Gender:</legend>
      <div class="radio-group">
        <label><input type="radio" name="gender" value="Male"> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
      </div><br>

      <label>Age:
        <input type="date" name="dob" id="age" min="14" max="80" required>
      </label><br><br>

      <label>Job:
        <input type="text" id="job" name="job">
      </label><br><br>
      @error('job')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <label>Address:
        <input type="text" id="Address" name="address">
      </label><br><br>
      @error('address')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <label>Education Level:
        <select id="education" name="education" required>
          <option value=" ">Select...</option>
          <option>High School</option>
          <option>Bachelor's</option>
          <option>Master's</option>
          <option>PhD</option>
          <option>Other</option>
        </select>
      </label><br><br>

      <legend>Hobbies:</legend>
      <div class="checkbox-group">
        <label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
        <label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
        <label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
        <label><input type="checkbox" name="hobbies[]" value="Travel"> Travel</label>
        <label><input type="checkbox" name="hobbies[]" value="Other"> Other</label>
      </div><br>

      <label>Marital Status:
        <select id="maritalStatus" name="marital" required>
          <option value="">Select...</option>
          <option>Single</option>
          <option>Married</option>
          <option>Divorced</option>
          <option>Widowed</option>
        </select>
      </label><br><br>

      <label>Number of children:
        <input type="number" id="children" min="0" name="nb_children">
      </label><br><br>
      @error('nb_children')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <label>Nationality:
        <input type="text" id="nationality" name="nationality">
      </label><br><br>
      @error('nationality')
      <div style="color: red;">{{$message}}</div>
      @enderror

      <button type="submit">Register</button><br>
      <span>Already have an account? <a href="login">Login</a></span>
    </form>
  </div>
  <script src="Project/script.js"></script>
</body>
</html>