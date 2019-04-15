# Ping

A python based TCP server was created listening to a specific port.

A form was created that searches a database and returns a ip adress of the requested website

the form page then connects to the ip adress and gets a reply

the respose from the server is recorded and appended to the form page without refreshing the page

## Technologies used

#### Web Server
Microsoft-IIS/10.0

PHP version: 7.2.14 

#### Database
Database client version: mysql8(make sure connections can be made using native password instead of auth socket)

GUI: phpMyAdmin Version information: 4.8.5

## Socket Listener

The socket listening file server.py should be executed with Python 2.7.14

## Instructions to run

0.Open formtest.php and update: 

$servername
$username
$password

to the values matching your SQL Server 

1.Place the contents of the branch master to C:\inetpub\wwwroot( or  /var/www/html if using a Linux Stack)

2.Open PhpMyAdmin and import the SQL file provided

3.Open localhost/form.php

4.Start the socket server (python server.py)

5.On the form page enter localhost in the text box. The socket listener should display an incomming 
connection and a message should be appended to the page
6.If you enter 'error' a ip is returned where a connection is not possible

7.Entering 'google' should also connect you to the server

8.Entering 'yahoo' should returns the local ip adress of my computer but for you it will be different. Update it before running it or else it will return error  
Note: Make Sure the port in both the server.py and formtest.php is same 

Soham Bhattacharya
(thinkerxyz)
+917325817958
bhattacharya.soham@outlook.com
