# Simple Chatroom
This project is a simple chatroom that you can send messages in anonymously.

# How To Install
- Install Xampp
- Drop all files/folders in the htdocs folder
- Import the database with the sql file via phpmyadmin
- Go to localhost

# How it works
- The message you type on the webpage gets sent to a PHP script via Javascript
- The message gets stored in the database
- The database automaticly gives it a message_id and a datetime
- Every 50ms the webpage asks the database for the last 16 messages present in the database
