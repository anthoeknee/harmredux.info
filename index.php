<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#ffff00">
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffff00">
        <link rel="stylesheet" href="style.css?v=1">
        <link rel="icon" type="image/png" href="">
        <title>harmredux.info — harm reductionists</title>
    </head>
    <body>
      <h1><a href="https://harmredux.info">harmredux.info</a> — the best harm reduction you can for free</h1>
      <h2>dying from dysentry bitch</h2>
      <br>
      <p>work in progress </p>
      <ul>
          <?php include("inc/contact.html");?>
      </ul>
    <h5>full source is available on github!
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
