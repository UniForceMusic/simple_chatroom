<?php
    // THIS PHP SCRIPT WILL GET THE LATEST MESSAGE IN THE DATABASE
    include_once 'dbConnect.php';

    // Function that checks the amount of rows present in the database
    function countRows($connection) {
        $sql = "SELECT COUNT(message_id) FROM messages;";
        $result = mysqli_query($connection, $sql);
        $fetchResult = mysqli_fetch_assoc($result);
        return $fetchResult['COUNT(message_id)'];
    }

    // Amount of messages to be displayed at once
    $displayAmount = 15;

    // This code checks if there are more less than 15 messages in the database
    if (countRows($connection) <= $displayAmount) {
        $amountMsg = countRows($connection) - 1;
    }
    else {
        $amountMsg = $displayAmount;
    }

    // This query gets all the colomns from the latest message
    $sql = "SELECT * FROM messages ORDER BY message_id DESC";
    $result = mysqli_query($connection, $sql);

    // This code returns the contents from the latest message
    $printText = "";
    for ($i = 0; $i <= $amountMsg; $i++) {
        // Fetch the data from the current row as an Array
        $row = mysqli_fetch_assoc($result);
        
        // Each loop a div of text gets added to the variable
        $printText .= "<div class=\"displaymsg\">" . $row['datetime'] . " || Anonymous: || " . $row['content'] . "</div>";
    }

    // Print a div that will contain all the messages
    $printdiv = "<div class=\"msgcontainer\">" . $printText . "</div>";
    echo $printdiv;
?>