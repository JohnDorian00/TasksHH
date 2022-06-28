<?php
    $jsonString = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
    ,2009,2010]}';

    $objectFromJson = json_decode($jsonString);

//    foreach($objectFromJson->years as $i => $year) {
//        echo "Year №".($i + 1)." = ".$year."\n";
//    }

    $hostname = "localhost";
    $username = "root";
    $password = "123";
    $database = "testschema";

    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully\n";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    echo gettype($result)."\n";

    foreach($result as $row) {
//        echo gettype($row);
        print_r($row);
        // do something with each row
    }