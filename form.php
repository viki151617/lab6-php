<?php include 'form.php'; ?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<h2>Questionnaire for a friend</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Your favorite color: <input type="text" name="color">
  <span class="error"><?php echo $colorErr;?></span>
  <br><br>
  Your favorite film: <textarea name="film"></textarea>
  <br><br>
  Your favorite animal:
  <input type="radio" name="animal" value="cat">Cat
  <input type="radio" name="animal" value="dog">Dog
  <input type="radio" name="animal" value="other">Other
  <span class="error">* <?php echo $animalErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
