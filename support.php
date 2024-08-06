<?php
    include_once 'import/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Ticket Support</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/mbody.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        .sup {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .faq {
            margin: 10px 0;
        }

        .question {
            font-weight: bold;
            font-size: 18px;
            margin: 10px 0;
            cursor: pointer;
        }

        .answer {
            display: none;
            margin: 5px 0;
        }
    </style>
    <script>
        function toggleAnswer(answerId) {
            var answer = document.getElementById(answerId);
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Support & FAQ</h1>
    </header>
    <div class="sup">
        <div class="faq">
            <div class="question" onclick="toggleAnswer('answer1')">How can I book a flight?</div>
            <div class="answer" id="answer1">You can book a flight by visiting our website and following the booking process.</div>
        </div>
        <div class="faq">
            <div class="question" onclick="toggleAnswer('answer2')">What payment methods do you accept?</div>
            <div class="answer" id="answer2">We accept credit cards and various online payment methods.</div>
        </div>
        <div class "faq">
            <div class="question" onclick="toggleAnswer('answer3')">How can I change my flight reservation?</div>
            <div class="answer" id="answer3">You can change your reservation by logging into your account and following the instructions for flight changes.</div>
        </div>
    </div>
</body>
</html>





<?php
    include_once 'import/footer.php';
?>