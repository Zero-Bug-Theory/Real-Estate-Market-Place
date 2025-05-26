<?php
    // include "header.php";
    include "../back3nd/db_conn.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/awardscategorypa.css">
    </head>
    <body>
        <?php 
          // $award = $_GET['award'];
          $sql2 = "SELECT category FROM awards ";
          $results = $conn->query($sql2); 
          if ($results ->num_rows > 0) {
          
          while ($row = $results-> fetch_assoc()) { ?>

        <div class="pagewrap">
            <div class="categorybackground"></div>
            <h1 class="selectcategory">Select the category to vote </h1>
            <div class="categorycontentwrap">
                <div class="Category"> <a class="cat" href="nomineedisplaypage.php">
                    <img src="../images/winner.jpeg" alt="award-art" class="categoryart">
                    <h2 class="categoryname"><?php echo $row['category'] ?></h2>
                    <p class="contestants"> 
                      <?php $results ?> Contestants
                    </p>
                </a> </div>
            </div>
        </div>
          <?Php } ?>
        <?Php  }?>
        
        <script src="" async defer></script>
    </body>
</html>