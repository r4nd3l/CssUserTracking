<?php
session_start();

// Prints the time that the script ran
print("Timestamp: " . time());

// Prints the action specified by the action parameter (in this case, "link_clicked")
// print("Action: " . $_REQUEST['action']);

// Prints the user's IP address
print("IP Address: " . $_SERVER['REMOTE_ADDR']);

// Prints the user's browser agent
print("User Agent: " . $_SERVER['HTTP_USER_AGENT']);
