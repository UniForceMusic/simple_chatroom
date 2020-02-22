<?php
    // Function that gets the amount of lines in the file
    function getAmountLines() {
        $messageFile = fopen("../txt/messages.txt", "r");
        $amountLines = 0;
        while(!feof($messageFile)){
            $line = fgets($messageFile);
            $amountLines++;
        }
        return $amountLines;
    }

    // Variable that stores the amount of lines currently in the file
    $amountLines = getAmountLines();
    
    // This variable controls how many messages should be displayed at once
    if ($amountLines < 16) {
        $amountMsg = $amountLines;
    } else {
        $amountMsg = 16;
    }

    // Convert each line to a div
    $messageFile = fopen("../txt/messages.txt", "r");
    $printText = "";
    for ($i = 0; $i < $amountMsg; $i++) {
        $printText .= "<div class=\"displaymsg\">" . fgets($messageFile) . "</div>";
    }

    // Print a div that will contain all the messages
    $printdiv = "<div class=\"msgcontainer\">" . $printText . "</div>";
    echo $printdiv;
?>
