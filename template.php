<!DOCTYPE html>
<html>
<head>
    <title>Key Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            margin-top: 0;
            font-size: 24px;
        }
        .key-container {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            word-break: break-all;
            position: relative;
        }
        .key {
            font-weight: bold;
            font-size: 18px;
        }
        .copy-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .copy-btn:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        .success-message {
            color: #4CAF50;
            margin-top: 10px;
            display: none;
        }
        .telegram-link {
            color: #fff;
            margin-top: 20px;
            display: block;
            text-decoration: none;
            font-weight: bold;
        }
        .telegram-link:hover {
            text-decoration: underline;
        }
        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://img.icons8.com/color/144/000000/telegram-app.png" alt="Telegram Logo" class="logo">
        <h1>🔑 Key đã được tạo thành công! 🔑</h1>
        <p>Hãy copy key này và dùng lệnh /key trong Telegram Bot</p>
        
        <div class="key-container">
            <div class="key" id="keyText"><?php echo htmlspecialchars($key); ?></div>
        </div>
        
        <button class="copy-btn" onclick="copyKey()">Copy Key</button>
        <div class="success-message" id="copySuccess">✓ Đã copy vào clipboard!</div>
        
        <a href="https://t.me/your_bot_username" class="telegram-link">Quay lại Telegram Bot</a>
    </div>

    <script>
        function copyKey() {
            const keyText = document.getElementById('keyText');
            const range = document.createRange();
            range.selectNode(keyText);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Hiển thị thông báo thành công
            const successMessage = document.getElementById('copySuccess');
            successMessage.style.display = 'block';
            
            // Ẩn thông báo sau 2 giây
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 2000);
        }
    </script>
</body>
</html>
