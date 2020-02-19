<?php
    include_once 'dbConnect.php';

    // Function that checks the amount of rows present in the database
    function countRows($connection) {
        $sql = "SELECT COUNT(message_id) FROM messages;";
        $result = mysqli_query($connection, $sql);
        $fetchResult = mysqli_fetch_assoc($result);
        return $fetchResult['COUNT(message_id)'];
    }

    // Function that clears all messages from the database
    function clearMessages($connection) {
        $sql = "DELETE FROM messages WHERE message_id > 0;";
        mysqli_query($connection, $sql);
    }

    // If statement that checks if there are no messages present in the database
    if (countRows($connection) == 0) {
        // Do nothing
    }
    else {
        clearMessages($connection);
    }
?>