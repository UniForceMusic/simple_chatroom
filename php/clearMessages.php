<?php
    // Variable to be inserted
    $stringToInsert = "Chatroom cleared";

    // Clear the entire file and write that the chatroom was cleared
    $messageFile = fopen('../txt/messages.txt', 'w');
    fwrite($messageFile, $stringToInsert);
    fclose($messageFile);
?>