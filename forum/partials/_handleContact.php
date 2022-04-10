<?php
    session_start();
    $contact_email = $_SESSION['useremail'];
    // echo $contact_email;
    $showError="false";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $contact_query = $_POST['contactQuery'];
        include '_dbconnect.php';
        $existSql="SELECT * FROM `contacts` where `contact_email`= '$contact_email';";
        $result = mysqli_query($conn,$existSql);
        $numRows=mysqli_num_rows($result);
        if($numRows<4)
        {
            $sql = "INSERT INTO `contacts` ( `contact_email`, `contact_query`, `timestamp`) VALUES ('$contact_email', '$contact_query', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                
                header("Location: /forum/index.php?contactsuccess=true");
                exit();
            }
            
        }
        else
        {
            header("Location: /forum/index.php?contactlimit=true");
            exit();
            
        }
        
    }
?>