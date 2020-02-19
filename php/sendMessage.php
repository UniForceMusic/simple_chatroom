
<?php
    // THIS PHP SCRIPT WILL SEND WHAT THE USER PUT IN TO 'CONTENT' TO THE DATABASE
    include_once 'dbConnect.php';

    // Variables that will be inserted in the SQL query
    $msgContent = $_POST["content"];

    // This query sends the contents to the database and saves it as a new message
    $sql = "INSERT INTO messages (content) VALUES ('$msgContent');";
    mysqli_query($connection, $sql);
?>