# Simple Chatroom
This project is a simple chatroom that you can send messages in anonymously. This version uses less cpu resources by using plain text as the storage solution

# How To Install
- Install Xampp
- Drop all files/folders in the htdocs folder
- Go to localhost

# How it works
- The message you type on the webpage gets sent to a PHP script via Javascript
- The message gets stored in the messages.txt file
- The PHP script gives the message a date and time
- Every 100ms the webpage asks the database for the last 16 messages present in the text file
