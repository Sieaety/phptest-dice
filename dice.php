<!DOCTYPE html>
<html>

<head>

  <!-- meta tags and title -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dice Roll</title>

  <!-- external and internal CSS -->
  <link rel="stylesheet" href="styles.css" media="all">
  <style>
    /* in-file CSS here */
  </style>


</head>

<body>

  
<!-- div section that contains main content on the page -->
  <div id="container">
    <h1> Dice Roll</h1>

    
<!-- start php for calculating dice rolls and results -->
    <?

    
//varible that stores users input for number of dice they wish to roll    
$diceRolled = $_GET["dice"];

//outputs text for number dice rolled and create dice div for all of the dice results   
echo "<div><h2>Number of dice rolled: " . $diceRolled . "</h2></div><div id=\"dice\">";

//loops through specified number times based on number of dice reuested by user and outputs dice roll result text and image
for ($i = 0; $i < $diceRolled; $i++) {
  
  
  //determines random result from 1 to 6
  $diceNumber = rand(1, 6);
  
  //adds each die result every time it loops through to produce total result at the end
  $total += $diceNumber;
  
  //varible of dice roll result text
  $rollText = "<p>You rolled a: " . $diceNumber . "</p>"; 
  
  //switch that determines which image to display (as well as $rollText) based on the number produced by the random function ($diceNumber)
  switch ($diceNumber) {
  case "1":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/one.png\">" . $rollText . "</div>";
    break;
  case "2":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/two.png\">" . $rollText . "</div>";
    break;
  case "3":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/three.png\">" . $rollText . "</div>";
    break;
      case "4":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/four.png\">" . $rollText . "</div>";
    break;
      case "5":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/five.png\">" . $rollText . "</div>";
    break;
      case "6":
    echo "<div class = \"die\"><img src=\"/phptest-dice/img/six.png\">" . $rollText . "</div>";
      } 
}

    
//displays the total    
echo "</div><div><h2>Total: " . $total . "</h2></div>";


?>
<!-- end php for calculating dice rolls and results -->
    
    
  </div>
 
  
  <!-- div section that contains content for allowing the user to reroll -->
  <div id="reroll">

    <h2>Reroll</h2>

<!-- form that allows user to input number of dice they want to reroll, input is then processed through php to give dice roll result -->   
    <form action="dice.php" method="get">
      Number of Dice <input type="number" name="dice" min="0">
      <input type="submit" value="Reroll">
    </form>

  </div>


<!-- footer block start -->
	<div id="footer">
		<p>Images by <a href="https://delapouite.com/" title="Delapouite">Delapouite</a> under <a href="https://creativecommons.org/licenses/by/3.0/" title="CC BY 3.0">CC BY 3.0</a> accessed on <a href="https://game-icons.net/" title="Game-icons.net">Game-icons.net<a></p>
	</div>
	<!-- #footer--> 
</body>
  

</html>