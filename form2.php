<?php
// define variables and set to empty values
$nameErr = $emailErr = $animalErr = $colorErr = "";
$name = $email = $animal = $film = $color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["color"])) {
    $color = "";
  } else {
    $color = test_input($_POST["color"]);
    }    
  }

  if (empty($_POST["film"])) {
    $film = "";
  } else {
    $film = test_input($_POST["film"]);
  }

  if (empty($_POST["animal"])) {
    $animalErr = "animal is required";
  } else {
    $animal = test_input($_POST["animal"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>You are my friend:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $color;
echo "<br>";
echo $film;
echo "<br>";
echo $animal;
?>
