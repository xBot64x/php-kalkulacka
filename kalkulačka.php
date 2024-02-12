<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulátor</title>
</head>
<body>
<marquee>nemám rád php</marquee>
<form method="post" select="<?php echo $_SERVER['PHP_SELF'] ; ?>">

    <div class="form_row">
    <input type="number" id="num1" name="num1" required><br>
    <select id="op" name="op">
        <option value="+">plus</option>
        <option value="-">mínus</option>
        <option value="*">krát</option>
        <option value="/">děleno</option>
    </select>
    <input type="number" id="num2" name="num2" required><br>
    </div>


    <input type="submit" name="submit" value="Calculate">
</form> 
</body>
</html>

<?php
if (isset($_POST['submit'])) {   // vstup

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];
}
?> 

<?php  // výpočty
switch ($op) {
    case "+":
        $result = $num1 + $num2;
    break;
    case "-":
        $result = $num1 - $num2;
    break;
    case "*":
        $result = $num1 * $num2;
    break;
    case "/":
    if ($num2 == 0) 
    {
      die("Nesmíš dělit nulou");
    } 
    else 
    {
        $result = $num1 / $num2;
    }
    break;
    default:
    // error
    echo "Chybička se vloudila";
}

echo "<p>{$num1} {$op} {$num2} = {$result}.</p>";
?>        