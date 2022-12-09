<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#404258">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffff00">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <link rel="icon" type="image/png" href="">
        <title>harmredux.info — harm reductionists</title>
    </head>
    <body>
      <h1><a href="https://harmredux.info">harmredux.info</a> — collective of community contributed harm reduction resources!</h1>
      <p style="font-size:14px">this website is a massive work in progress! if you have any desire to be a part of this wonderful little project please contact anthoeknee#2266 on discord!</p>
      <br>
      <p>work in progress </p>
      <ul>
          <?php include("inc/contact.html");?>
      </ul>
    <br><br><footer><?php

      if (filemtime(__FILE__) < filemtime("inc/contact.html")) {
        $time = filemtime("inc/contact.html");
      } else {
        $time = filemtime(__FILE__);
      }

      echo "last modified: ".date("F d, Y H:i:s",$time)." UTC";
      ?></footer>
    </h5>
    </body>
</html>
