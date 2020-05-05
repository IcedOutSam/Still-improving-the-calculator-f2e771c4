<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="form" method="post">
    <div class="inputs">
      <label for="name">Enter the first number: </label>
      <input type="text" name="number1" id="number1" required>

      <label for="name">Enter the second number: </label>
      <input type="text" name="number2" id="number2" required>

    </div>
    <div class="Buttons">
        <input type="Submit" value="X" name="knop">
        <input type="Submit" value="+" name="knop">
        <input type="Submit" value="/" name="knop">
        <input type="Submit" value="-" name="knop">
        <input type="Submit" value="%" name="knop">
        </form>

        <?php
// Casting verandert als het ware de value van de variable in dit geval om het vervolgens je eigen gekozen value te geven

if (isset($_POST["knop"])) {
    $nummer1 = (int) $_POST["number1"];
    $nummer2 = (int) $_POST["number2"];
    switch ($_POST["knop"]) {
        case 'X':
            $antwoord = ($nummer1 * $nummer2);
            echo "$antwoord";
            break;

        case '+':
            $antwoord = ($nummer1 + $nummer2);
            echo "$antwoord";
            break;
        case '/':
            $antwoord = ($nummer1 / $nummer2);
            echo "$antwoord";
            break;
        case '-':
            $antwoord = ($nummer1 - $nummer2);
            echo "$antwoord";
            break;
        case '%':
            $antwoord = ($nummer1 % $nummer2);
            echo "$antwoord";
            break;
        default:
            echo "Error";
            break;
    }
}
?>
    </div>
  </body>
</html>
