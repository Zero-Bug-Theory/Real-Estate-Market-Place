<?php
    // Connecting to the database";
    include "db_conn.php";
    include "award-post.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Dashboards.css">
</head>
<body>        
    <div class="Dashboardpagewrap">
        <div class="Dashboardbackground"></div>
        <h1 class="Dashboard">Admin Dashboard <?php echo $message;?> </h1>
        <div class="Dashcontentwrap">
            <div class="Create">
                <h1 class="fill-in">Fill in to upload Info.</h1>
                <form action="award-post.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="award" placeholder="Award" required>
                    <input type="text" name="category" placeholder="Category" required>
                    <input type="text" name="nominee" placeholder="Nominee" required>
                    <input type="text" name="ending" placeholder="Ending" required> 
                    <input type="file" name="fileUpload" placeholder="picture" required>
                    <br>
                    <input type="Submit" name="Submit" value="Upload">
                </form>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="Progress">
                <h1 class="fill-in">Awards Progress Report.</h1>
                <div class="Report">

                <?php
                // $Uid = $_REQUEST['Uid'];
                $sql2 = "SELECT * FROM awards WHERE Uid = Uid ORDER BY id DESC";
                $results = $conn->query($sql2); 
                if ($results ->num_rows > 0) {
                
                while ($row = $results-> fetch_assoc()) { ?>

                <div class="profile">
                    <div class="upper">
                        <?php echo '<img class="profile-image" src='.$row['picture'].'></img>'?>
                    </div>
                    <div class="lower">
                        <p>Award: <?php echo $row['award'] ?></p>
                        <p>category: <?php echo $row['category'] ?></p>
                        <p>Name: <?php echo $row['nominee'] ?></p>
                        <p>Votes: <?php echo $row['votes'] ?></p>
                        <p>Amount: <?php echo $row['amount'] ?></p>
                    </div>
                </div>
                    <?Php } ?>
            <?Php  }?>
                </div>
            </div>
        </div>
    </div>
    
    <script src="" async defer></script>
</body>
</html>