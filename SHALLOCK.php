<?php
// PHP code for dynamic parts or server-side logic can be added here if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Bio -TEAM BLACK MAFIA</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            background-color: #121212;
            color: #e0e0e0;
        }

        .wrapper {
            width: 90%;
            margin: 0 auto;
            padding: 20px;
        }

        .top-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .site-logo {
            width: 150px;
            margin: 10px auto;
            display: block;
        }

        .owner-name {
            font-size: 40px;
            font-weight: bold;
            color: #0dff00;
            text-shadow: 0 0 10px #0dff00, 0 0 20px #0dff00, 0 0 30px #0dff00;
        }

        /* Hacker Terminal Styles */
        .hacker-console {
            background-color: #1a1a1a;
            color: #0dff00;
            font-family: 'Courier New', Courier, monospace;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 0 20px rgba(13, 255, 0, 0.7);
            border: 3px solid #0dff00;
        }

        .command-line {
            color: #0dff00;
        }

        .output-line {
            font-weight: bold;
            animation: rainbow-text 5s ease-in-out infinite;
        }

        .output-line:nth-child(even) {
            animation: rainbow-text-reverse 5s ease-in-out infinite;
        }

        .cursor-effect {
            display: inline-block;
            width: 12px;
            height: 20px;
            background-color: #0dff00;
            animation: blink-effect 0.8s infinite;
        }

        .terminal-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .terminal-btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 12px 25px;
            margin: 8px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: all 0.3s ease;
            border: 2px solid #0dff00;
            box-shadow: 0 0 12px rgba(13, 255, 0, 0.7);
        }

        .terminal-btn:hover {
            background-color: #ff007f;
            box-shadow: 0 0 25px rgba(255, 0, 127, 0.7);
        }

        .footer-info {
            text-align: center;
            margin-top: 50px;
            color: #ff007f;
            text-shadow: 0 0 12px #ff007f, 0 0 24px #ff007f, 0 0 36px #ff007f;
        }

        .footer-info a {
            color: #ff007f;
            text-decoration: none;
            text-shadow: 0 0 12px #ff007f, 0 0 24px #ff007f, 0 0 36px #ff007f;
        }

        @keyframes blink-effect {
            50% {
                background-color: transparent;
            }
        }

        @keyframes rainbow-text {
            0% { color: #ff007f; }
            14% { color: #ff8000; }
            28% { color: #ffff00; }
            42% { color: #80ff00; }
            57% { color: #00ff80; }
            71% { color: #00ffff; }
            85% { color: #8000ff; }
            100% { color: #ff007f; }
        }

        @keyframes rainbow-text-reverse {
            0% { color: #ff007f; }
            14% { color: #8000ff; }
            28% { color: #00ffff; }
            42% { color: #00ff80; }
            57% { color: #80ff00; }
            71% { color: #ffff00; }
            85% { color: #ff8000; }
            100% { color: #ff007f; }
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="top-header">
            <img class="site-logo" src="https://www.icombd.com/Z/uploads/images%20(5).png" alt="Logo">
            <h1 class="owner-name">Siam</h1>
        </div>

        <!-- Hacker Portal Console View -->
        <div class="hacker-console">
            <h2>my identity </h2>
            <p class="command-line">~$ <span class="output-line">CYBER EXPERTS </span><span class="cursor-effect"></span></p>
            <p class="command-line">~$ <span class="output-line">Name ::: MD Siam</span></p>
            <p class="command-line">~$ <span class="output-line">address ::: MUNSHIGONJ </span></p>
            <p class="command-line">~$ <span class="output-line">FACEBOOK ACCOUNT ::: md siam uddin</span></p>
            <p class="command-line">~$ <span class="output-line">WORK AT STUDENT </span></p>
            <p class="command-line">~$ <span class="output-line">DEVELOPER ::: SHALLOCK </span></p>
            <p class="command-line">~$ <span class="output-line">TEAM ⚔️ BLACK MAFIA ⚔️</span></p>
            <p class="command-line">~$ <span class="output-line">CYBER SECURITY TEAM </span></p>
            <p class="command-line">~$ <span class="output-line">ALWAYS SINGLE 😜</span></p>
            <p class="command-line">~$ <span class="output-line">Join our pablic group</span></p>
            

            <!-- Channel Access Buttons -->
            <p class="command-line"><span class="output-line"></span></p>
            <h2>THANKS FOR USING ☣️</h2>
            <div class="terminal-buttons">
                <span class="terminal-btn" onclick="window.location.href='https://www.facebook.com/profile.php?id=61567735610687'">FACEBOOK</span>
                <span class="terminal-btn" onclick="window.location.href='https://facebook.com/groups/1518980045572630/'">GROUP </span>
                <span class="terminal-btn" onclick="window.location.href='https://www.tiktok.com/@devil_official099?_t=ZS-8rleGL0bc5C&_r=1'">TIKTOK</span>
                
            </div>
        </div>

        <div class="footer-info">
            <p>Powered by <a href="https://t.me/+Ig0NOE1Gg50xZWVl" target="_blank">Team BLACK MAFIA</a></p>
        </div>
    </div>

    <script>
        // JavaScript for the terminal cursor animation
        let cursor = document.querySelector('.cursor-effect');
        setInterval(() => {
            cursor.style.visibility = cursor.style.visibility === 'visible' ? 'hidden' : 'visible';
        }, 500);
    </script>

</body>
</html>