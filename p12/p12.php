<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uname = $_POST["username"];
      $pass = $_POST["password"];
      $user_data = fopen("user_info.txt", "r");
      $contents = fread($user_data, filesize("user_info.txt"));
      fclose($user_data);
      if (strpos($contents, $uname . ":" . $pass) !== false) {
        echo "<p>Access granted!</p>";
      } else {
        echo "<p>Access denied!</p>";
      }
    }
    ?>