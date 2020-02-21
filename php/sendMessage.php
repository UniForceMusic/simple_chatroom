<?php
    // Variables that will be inserted in message
    $msgContent = $_POST["content"];
    $currentDate = date("d-m-Y");
    $currentTime = date("H:i:s");
    $currentContent = file_get_contents('../txt/messages.txt');
    $contentToInsert = $currentDate . " " . $currentTime . " || Anonymous: || " . $msgContent . "\n";
    $stringToInsert = $contentToInsert . $currentContent;

    // Write to the text file
    $messageFile = fopen('../txt/messages.txt', 'w');
    fwrite($messageFile, $stringToInsert);
    fclose($messageFile);
?>