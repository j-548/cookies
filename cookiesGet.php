

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>

    <div class="content txtCenter">
    <?php
      foreach ($_COOKIE as $key => $value) {
        echo("<p>$key; $value<p>");
      }
     ?>
    </div>

  <script type="text/javascript" src="js/.js"></script>

  </body>

</html>
