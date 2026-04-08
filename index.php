<?php
$name = "Aniket Supe";
$title = "Software Test Engineer";
$email = "aniket@zoho.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?> Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f2027, #2c5364);
            color: white;
        }

        header {
            text-align: center;
            padding: 40px 20px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #ffd369;
            object-fit: cover;
            margin-bottom: 15px;
        }

        header h1 {
            font-size: 36px;
        }

        header p {
            color: #ccc;
        }

        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        .card {
            background: rgba(255,255,255,0.08);
            padding: 20px;
            margin: 15px 0;
            border-radius: 15px;
            backdrop-filter: blur(12px);
            transition: 0.3s;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        h2 {
            color: #ffd369;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
        }

        ul li {
            margin: 6px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background: #ffd369;
            color: black;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover {
            background: #ffb347;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: rgba(0,0,0,0.3);
            margin-top: 20px;
        }
    </style>
</head>

<body>

<header>
    <!-- Image add kar -->
    <img src="profile.jpg" alt="Profile" class="profile-img">

    <h1><?php echo $name; ?></h1>
    <p><?php echo $title; ?></p>
</header>

<div class="container">

    <div class="card">
        <h2>About Me</h2>
        <p>Experienced Software Tester with 5+ years in manual and automation testing.</p>
    </div>

    <div class="card">
        <h2>Skills</h2>
        <ul>
            <li>✔ Manual Testing</li>
            <li>✔ Selenium with Python</li>
            <li>✔ API Testing</li>
            <li>✔ Test Case Writing</li>
        </ul>
    </div>

    <div class="card">
        <h2>Gen AI / Agentic AI</h2>
        <ul>
            <li>🤖 Prompt Engineering</li>
            <li>⚡ AI Test Case Generation</li>
            <li>🧠 LLM Understanding</li>
        </ul>
    </div>

    <div class="card">
        <h2>Projects</h2>
        <ul>
            <li>📌 PagarBook Testing</li>
            <li>📌 Automation Framework</li>
            <li>📌 AI Test Case Generator</li>
        </ul>
    </div>

    <div class="card">
        <h2>Contact</h2>
        <p>Email: <?php echo $email; ?></p>
        <a href="mailto:<?php echo $email; ?>" class="btn">Contact Me</a>
    </div>

</div>

<footer>
    <p>© <?php echo date("Y"); ?> <?php echo $name; ?></p>
</footer>

</body>
</html>