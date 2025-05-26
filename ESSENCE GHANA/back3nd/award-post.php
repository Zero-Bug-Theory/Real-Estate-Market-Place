<?php

// connecting to the database";
require "db_conn.php";

$message = "";

// Check if info was submitted
if (isset($_POST["Submit"])) {
    $award = $_POST["award"];
    $category = $_POST["category"];
    $nominee = $_POST["nominee"];
    $ending = $_POST["ending"];
        
    $target_dir = "../images/uploads/";
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileUpload"]["size"] > 400000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
        echo "Sorry, your file type is not allowed.";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $message= '<h2 style="text-align:centre; padding:10px; background-color: whitesmoke; 
            color:darkred; width:50%; margin-left:25%;">
            There is an error with your file ! </h2>';
            echo "$message";
        }
        // if everything is ok, try to upload file
        else {
            $code = rand(999999, 111111);
            $Uid ="ESC".$code;
            // echo "$Uid";
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file)){
                $sql = "INSERT INTO awards (award, category, nominee, picture, ending, Uid)  
                VALUES ('$award','$category', '$nominee', '$target_file', ' $ending', '$Uid')";
    
                $result = mysqli_query($conn, $sql);
                
                if ($result == True ) {
                        $message= '<br> <br> <h2 style="text-align:centre; padding:10px; 
                        background-color:darkgreen; color:white; width:50%; margin-left:15%;">
                        Post Successfully added !</h2> <br> <br>';
                        echo "$message";
                        ?><a style="text-align:centre; padding:10px; background-color:darkblue; 
                        color:white; width:50%; margin-left:15%;" href="Dashboard.php";> 
                        Add another Post <a/><?php 
                    } else {
                        $message= '<h2 style="text-align:centre; padding:10px; 
                        background-color:darkred; color:white; width:50%; margin-left:15%;">
                        Post failed !</h2>';
                        echo "$message";
                }       
            }
            else {
                echo "Sorry, Something's wrong!";
            }
        }

}
?>



