<!DOCTYPE html>
<html>
<head>
  <title>Password Generator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    .output {
      margin-top: 20px;
      padding: 10px;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 3px;
      word-wrap: break-word;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .copy-button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
      border-radius: 3px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Password Generator</h2>
    <div class="output" id="output"></div>
    <div class="button-container">
      <button onclick="generatePassword()">Generate Password</button>
      <button onclick="copyPassword()" class="copy-button">Copy</button>
    </div>
  </div>

  <script>
    function generatePassword() {
      var charArray = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
        'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
        '#', '@', '$', '%'
      ];
      
      var length = Math.floor(Math.random() * 3) + 8; // Random length between 8 and 10
      var password = '';

      for (var i = 0; i < length; i++) {
        var randomIndex = Math.floor(Math.random() * charArray.length);
        password += charArray[randomIndex];
      }

      document.getElementById('output').textContent = password;
    }

    function copyPassword() {
      var passwordOutput = document.getElementById('output');
      var passwordText = passwordOutput.textContent;

      var textarea = document.createElement('textarea');
      textarea.value = passwordText;
      document.body.appendChild(textarea);
      textarea.select();
      document.execCommand('copy');
      document.body.removeChild(textarea);

      alert('Password copied to clipboard!');
    }
  </script>
</body>
</html>
