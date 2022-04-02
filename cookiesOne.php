
<?php

  define("NEW_TIME", 86400 * 7);
  $userName = $_POST['name'];
  $userAge = $_POST['age'];
  $userGender = $_POST['gender'];
  setcookie("name", $userName, time() + NEW_TIME);
  setcookie("age", $userAge, time() + NEW_TIME);
  setcookie("gender", $userGender, time() + NEW_TIME);

?>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class="content">
    <p>Your name: <?php echo ($userName) ?></p>
    <p>Your age: <?php echo ($userAge) ?></p>
    <p>Your gender: <?php echo ($userGender) ?></p>
    <a href= "cookiesGet.php">get cookie<a/>
    </div>

  <script type="text/javascript" src="js/.js"></script>

  </body>

</html>
