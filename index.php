<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" href="stylesheet.css">

<html>
    <head>
        <title>Chatroom</title>
        <script src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            // Function that will load with the page. It will write the newest message every second
            function getMessageLoop() {
                setInterval(function(){
                    $.post('php/getMessage.php', {}, function(returnMsg){
                    $('.msgcontainer').replaceWith(returnMsg);
                    });}, 100);
            }

            // Function that will send a message to the database once a button is pressed
            function sendMessage() {
                // Variables that will be sent to the php script
                var content = $('#content').val();
                $.post('php/sendMessage.php',{content:content}, function(){});
            }

            // Function that will clear all the messages from the database
            function clearMessages() {
                $.post('php/clearMessages.php',{}, function(){});
            }

            // Function that submits the form when the 'Enter' key is pressed
            $(document).on("keydown",function(e){
                var keyCode = e.which || e.keyCode;
                if(keyCode == 13) {
                    sendMessage();
                }
            });
        </script>
    </head>

    <body>
        <div class="content">
            <!-- DIV THAT DISPLAYS THE WELCOME MESSAGE -->
            <div class="welcomemsg">
                <h1>Welcome to the chatroom</h1>
            </div>
        
            <!-- DIV THAT HOLDS THE CONTENT TEXTBOX -->
            <div class="messageform">
                <form method="post">
                    <td><input type="textbox" class="textbox" id="content" name="content" size="40" autocomplete="off" autofocus="autofocus"></td>
                </form>
            </div>

            <!-- DIV THAT DISPLAYS THE MESSAGES -->
            <div class="displayarea">
                <!-- div for displaying the latest message -->
                <h3>Chatroom:</h3>
                <div class="msgcontainer"></div>
            </div>

            <!-- DIV CLEARS THE DATABASE -->
            <div class="clearmsg">
                <!-- button that clears the messages -->
                <button onclick="clearMessages()" class="button" name="button">Clear messages</button>
            </div>
        
        </div>
    </body>

    <script>
        // This javascript is loaded once the page is loaded
        window.onload = getMessageLoop();
    </script>
</html>