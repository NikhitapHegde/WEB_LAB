<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $thoughts = $_POST["thoughts"];
      $thought_file = fopen("My_thoughts.txt", "w");
      fwrite($thought_file, $thoughts);
      fclose($thought_file);
      echo "<p>The thought is: </p>";
      echo "<p class='bold'>$thoughts</p>";
      $file_path = realpath("My_thoughts.txt");
      echo "<p>The thought file path is: <span class='bold'>$file_path</span></p>";
    }
  ?>