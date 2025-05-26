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
        <link rel="stylesheet" href="../css/nomineedisplayp.css">
    </head>
    <body>
            <?php
            $category = $_GET['category'];
            $sql2 = "SELECT * FROM awards WHERE category= $category";
            $results = $conn->query($sql2); 
            if ($results ->num_rows > 0) {
            
            while ($row = $results-> fetch_assoc()) { ?>

        <div class="pagewrap">
            <div class="nomineebackground"></div>
            <h1 class="votenominee">Vote your favorite Nominee</h1>
            <div class="nomineecontentwrap">
                <div class="nominee">
                    <?php echo '<img class="nomineeart" src='.$row['picture'].'></img>'?>
                    <!-- <img src="../images/pic4.jpg" alt="award-art" class="nomineeart"> -->
                    <div class="nomineename"><?php echo $row['nominee'] ?></div>
                    <input type="text" name="votes" placeholder="No. of votes" required>
                    <input type="text" name="amount" placeholder="Amount">
                    <input type="submit" name="submit" value="Submit Vote">
                </div>
            </div>
            <?Php } ?>
        <?Php  }?>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>