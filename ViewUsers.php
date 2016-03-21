<?php

    $mysqli = new mysqli("mysql.eecs.ku.edu", "hramanan", "banana123", "hramanan");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT * FROM Users";

    echo "<table>";
    if ($result = $mysqli->query($query))
    {
        $array1 = $result->fetch_all();
    }

    foreach($array1 as $entry)
    {
        echo "<tr style=\"border:1px solid gray\" bgcolor=\"gray\"><td>" . $entry[0] . "</td><td><b></td></tr>";
    }
    
    echo "</table>";
    
    mysql_close();
?>