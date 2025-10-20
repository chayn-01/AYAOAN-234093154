<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Introduce Yourself</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0C0420, #5D3C64, #9F6496);
            background-attachment: fixed;
            color: #0C0420;
            margin: 0;
            padding: 0;
        }

        .container {
            background: #F3D9E5;
            width: 650px;
            margin: 80px auto;
            padding: 35px 50px;
            border-radius: 25px;
            box-shadow: 0 8px 30px rgba(12, 4, 32, 0.4);
            text-align: center;
            transition: all 0.4s ease;
        }

        .container:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(90, 60, 100, 0.5);
        }

        h1 {
            color: #BA6E8F;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        form {
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-weight: 600;
            margin: 15px 0 6px 0;
            color: #78466A;
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            border-radius: 15px;
            border: 2px solid #9F6496;
            outline: none;
            font-size: 16px;
            transition: border-color 0.3s ease;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #BA6E8F;
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #BA6E8F, #9F6496);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 12px 40px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(90, 60, 100, 0.3);
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #D39180, #BA6E8F);
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(155, 80, 130, 0.5);
        }

        .result {
            background: #F8EEF2;
            padding: 25px;
            border-radius: 15px;
            margin-top: 25px;
            text-align: left;
            color: #4A2E50;
            box-shadow: inset 0 0 10px rgba(155, 100, 130, 0.1);
            font-size: 18px;
        }

        .back {
            display: inline-block;
            margin-top: 30px;
            background: linear-gradient(135deg, #9F6496, #78466A);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(90, 60, 100, 0.3);
            transition: all 0.3s ease;
        }

        .back:hover {
            background: linear-gradient(135deg, #BA6E8F, #D39180);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Introduce Yourself</h1>

        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" min="1" max="120" required>

            <label for="color">Favorite Color:</label>
            <input type="text" id="color" name="color" placeholder="Enter your favorite color" required>

            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // sanitize inputs to avoid XSS
                $name = htmlspecialchars(trim($_POST['name']));
                $age = htmlspecialchars(trim($_POST['age']));
                $color = htmlspecialchars(trim($_POST['color']));

                echo "<div class='result'>";
                echo "Hi! I’m <strong>$name</strong>. I’m <strong>$age</strong> years old, and my favorite color is <strong>$color</strong>!";
                echo "</div>";
            }
        ?>

        <a href="index.php" class="back">Back to Home</a>
    </div>
</body>
</html>
