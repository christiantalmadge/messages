<?php

    //this is our data layer

    function getConnection(){
        $user = 'ctalmadg_christiantal';
        $pass = 'Fuo=rnr8@yi0';
        $host = 'localhost';
        $database = 'ctalmadg_it328';

        $connection = mysqli_connect($host,$user,$pass,$database);
        //if we get a false value, something went wrong
        if(!$connection){
            echo'Error connection to DB: ' .mysqli_connect_error();
            exit;
        }
        return $connection;
    }
    function getMessages()
    {
        $connection = getConnection();

        //query for message records
        $query = 'SELECT id,body FROM messages';

        $results = mysqli_query($connection, $query);

        if (!$results) {
            echo 'Error retrieving records.';
            exit;
        }
        $records = array();

        while ($row = mysqli_fetch_assoc($results)) {
            $records[] = $row;
        }
        //free up server resources
        mysqli_free_result($results);

        return $records;
        function insertMessage($message)
        {

        }
    }
?>