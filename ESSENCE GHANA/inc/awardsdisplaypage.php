<?php
    include "header.php";
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
        <link rel="stylesheet" href="../css/awardsdisplayp.css">
    </head>
    <body>

        <?php 
          $sql2 = "SELECT * FROM awards WHERE award = 'VGMA' ";
          $results = $conn->query($sql2); 
          if ($results ->num_rows > 0) {
          
          while ($row = $results-> fetch_assoc()) { ?>
          

        <div class="awardspagewrap">
            <div class="awardsbackground"></div>
            <h1 class="awardsinprogress">Awards in Progress</h1>
            <div class="awardscontentwrap">
                <div class="awards">
                    <img src="../images/award.jpeg" alt="award-art" class="awardart">
                    <div class="awardsname"><?php echo $row['award'] ?></div>
                    <p class="textphrase"> 
                       No. of votes Cast : <?php echo $row['votes'] ?> <br>
                        Voting ends on : <?php echo $row['ending'] ?>
                    </p>
                    <button class="votehere"> <a class="link" href="awardscategorypage.php"> Vote Here </a></button>
                </div>
            </div>
        </div>
         <?Php } ?>
        <?Php  }?>
        <script src="" async defer></script>
    </body>
</html>