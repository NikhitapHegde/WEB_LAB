<<!DOCTYPE html>

    <head>
       <title>Date</title>
       <style>
        h1{
            text-align: center;
        }
        date{
            color: green;
        }
       </style>
    </head>
    <body>
    <h1>Today's date is
    
    <?php
    $today= date("d-m-Y");
    echo $today;
    ?>
    
    </h1>
   
    </body>
</html>