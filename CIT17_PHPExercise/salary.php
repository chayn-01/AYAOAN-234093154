<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
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

        h1, h3 {
            color: #BA6E8F;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(135deg, #BA6E8F, #9F6496);
            color: #fff;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            letter-spacing: 0.5px;
            box-shadow: 0 3px 10px rgba(90, 60, 100, 0.3);
            transition: all 0.3s ease;
        }

        a:hover {
            background: linear-gradient(135deg, #D39180, #BA6E8F);
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(155, 80, 130, 0.5);
        }

        .result {
            background: #F8EEF2;
            padding: 20px;
            border-radius: 15px;
            margin-top: 15px;
            text-align: left;
            color: #4A2E50;
            box-shadow: inset 0 0 10px rgba(155, 100, 130, 0.1);
        }

        .back {
            background: linear-gradient(135deg, #9F6496, #78466A);
        }

        .back:hover {
            background: linear-gradient(135deg, #BA6E8F, #D39180);
        }
    </style>
</head>
<body>
<div class="container">
        <h1> Salary Calculator</h1>
        <div class="result">
            <?php
                // Given variables
                $basic_salary = 20000;
                $allowance = 5000;
                $deduction = 3000;

                // Computation
                $net_salary = $basic_salary + $allowance - $deduction;

                // Display
                echo "Basic Salary: ₱" . number_format($basic_salary, 2) . "<br>";
                echo "Allowance: ₱" . number_format($allowance, 2) . "<br>";
                echo "Deduction: ₱" . number_format($deduction, 2) . "<br><br>";
                echo "<strong>Net Salary: ₱" . number_format($net_salary, 2) . "</strong>";
            ?>
        </div>
        <a href="index.php"> Back to Home</a>
    </div>
</body>
</html>