<?php
    
    $user = $_POST["user"];
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "hramanan", "banana123", "hramanan");

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    
    $query = "INSERT INTO Users(user_id)
                VALUES('$user')";
    
    if ($result = $mysqli->query($query)) {
        echo "Username sucessfully created!";
    }
    else
        echo "Username already in use. Try different ID.";
    
    /* close connection */
    $mysqli->close();
?>