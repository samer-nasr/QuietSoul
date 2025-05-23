<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat With Us - Quiet Soul</title>
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
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      color: goldenrod;
      margin-bottom: 20px;
    }

    p {
      color: #333;
      margin-bottom: 40px;
      font-size: 18px;
    }

    .chat-container {
      width: 90%;
      max-width: 500px;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(218, 165, 32, 0.3);
      padding: 20px;
      display: flex;
      flex-direction: column;
      height: 500px;
      overflow-y: scroll;
    }

    .message {
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 10px;
      max-width: 80%;
      animation: fadeInUp 0.4s ease;
    }

    .user {
      background-color: #f5deb3;
      align-self: flex-end;
    }

    .bot {
      background-color: #f0e68c;
      align-self: flex-start;
    }

    .typing {
      font-style: italic;
      color: #888;
      margin-bottom: 10px;
    }

    .input-container {
      display: flex;
      margin-top: 20px;
      width: 90%;
      max-width: 500px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      border-radius: 10px 0 0 10px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 15px;
      font-size: 16px;
      border: none;
      background-color: goldenrod;
      color: white;
      border-radius: 0 10px 10px 0;
      cursor: pointer;
    }

    button:hover {
      background-color: #daa520;
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

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .message {
  animation: fadeInUp 0.4s ease;
}

  </style>
  <link rel="stylesheet" href="Project/style.css">
</head>
<body>

    <h2>Always feel comfortable while chatting with us</h2>
    <p>You've just entered the right area to free your mind, body, and recover your energy!</p>
  
    <div class="chat-container" id="chat-box">
      <!-- الرسائل تظهر هنا -->
    </div>
  
    <div class="input-container">
      <input type="text" id="userInput" placeholder="Type your message...">
      <button onclick="sendMessage()">Send</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script>
      const chatBox = document.getElementById("chat-box");
    
      async function sendMessage() {
        let input = document.getElementById("userInput");
        let message = input.value.trim();
        if (message === "") return;
    
        // عرض رسالة المستخدم
        let userMessage = document.createElement("div");
        userMessage.className = "message user";
        userMessage.textContent = message;
        chatBox.appendChild(userMessage);
    
        // إظهار "Bot is typing..."
        let typing = document.createElement("div");
        typing.className = "typing";
        typing.textContent = "Bot is typing...";
        chatBox.appendChild(typing);
    
        input.value = "";
        chatBox.scrollTop = chatBox.scrollHeight;

        $.ajax({
            url: '/send-data', // Laravel route
            type: 'POST',
            data: {
                message: message,
                _token: '{{ csrf_token() }}' // Important for Laravel
            },
            success: function (response) {
                // إزالة "Bot is typing..."
                chatBox.removeChild(typing);
    
                // عرض رسالة البوت
                let botMessage = document.createElement("div");
                botMessage.className = "message bot";
                botMessage.textContent = response.message; // تأكد من أن هذا هو المفتاح الصحيح في الاستجابة
                chatBox.appendChild(botMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
            },
            error: function (xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
    
      }
    </script>
    <div style="text-align: center; margin-top: 40px;">
      <a href="category">
        <button class="back-btn">Back to Categories</button>
      </a>
    </div>
  </body>
  </html>