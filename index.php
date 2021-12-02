<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number System Conversation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .show {
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
            transition: 0.3s;
            padding: 10px;
            width: 400px;
        }
        .row {
            width: 400px;
            margin: 0 auto;
            margin-top: 64px;
        }
        .gcolour{
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="column">
            <form action="process.php" method="post">
                <fieldset>
                    <label for="convertor">Select Converter</label>
                    <select id="convertor">
                        <option value="1">Decimal To Binary</option>
                        <option value="2">Decimal To Octal</option>
                        <option value="3">Decimal To Hexadecimal</option>
                        <option value="4">Binary To Decimal</option>
                        <option value="5">Binary To Octal</option>
                        <option value="6">Binary To Hexadecimal</option>
                        <option value="7">Octal To Decimal</option>
                        <option value="8">Octal To Binary</option>
                        <option value="9">Octal To Hexadecimal</option>
                        <option value="10">Hexadecimal To Decimal</option>
                        <option value="11">Hexadecimal To Binary</option>
                        <option value="12">Hexadecimal To Octal</option>
                    </select>

                    <label for="num">Number</label>
                    <input type="text" placeholder="Type a number.." id="num" name="number">

                    <input type="hidden" name="action" id="action" value="1">

                    <input class="button-primary" type="submit" value="Convert">
                </fieldset>
            </form>

            <hr>

            <p class="show">
                <?php 
                    $num = $_SESSION['num'] ?? '';
                    $c_num = ucfirst($_SESSION['c_number'] ?? '');
                    $num_f = ucfirst($_SESSION['num_f'] ?? '');
                    $c_num_f = ucfirst($_SESSION['c_num_f'] ?? '');

                    if($num && $c_num && $c_num_f && $num_f)
                    {
                        echo "<strong class='gcolour'>Convert: {$num_f} to {$c_num_f}</strong><br>";
                        echo "<strong class='num_name'>{$num_f}<strong>:<strong> {$num}</strong><br>";
                        echo "<strong class='num_name'>{$c_num_f}<strong>:<strong> {$c_num}</strong>";
                    }
                ?>
            </p>

        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>