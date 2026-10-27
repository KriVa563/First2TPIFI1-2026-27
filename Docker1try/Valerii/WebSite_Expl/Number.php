<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Please type your number A:</h1>
    <?php
    if(isset($_GET["number1"]))
        {
            print "The number is:".$_GET["number1"]
        }
        else
            {
    ?>
    <form method="GET" action="Result.php">
Please type the number here: <input type="number" name="number1">
<button type= "submit">send data</button>
    </form>
    <?php
    }
</body>
</html>