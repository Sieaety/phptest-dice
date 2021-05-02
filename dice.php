<?

$diceRolled = $_GET["dice"];

echo "Number of dice rolled: " . $diceRolled;

for ($i = 0; $i < $diceRolled; $i++) {
  
  $diceNumber = rand(1, 6);
  switch ($diceNumber) {
  case "1":
    echo "<img src=\"pic_trulli.jpg\">";
    break;
  case "2":
    echo "dice 2";
    break;
  case "3":
    echo "dice 3";
    break;
      case "4":
    echo "dice 4";
    break;
      case "5":
    echo "dice 5";
    break;
      case "6":
    echo "dice 6";
}
  echo "You rolled a: " . $diceNumber;
  $sum += $i;
}

echo "Your total is: " . $sum;

?>
