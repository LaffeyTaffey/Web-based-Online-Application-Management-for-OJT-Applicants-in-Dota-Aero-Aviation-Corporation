<?php
// Sample PHP script to fetch online users count
session_start(); // Start session to use session variables

// Example: Count active sessions
$onlineUsers = count($_SESSION['active_users']);

// Output as JSON
header('Content-Type: application/json');
echo json_encode(['online_users' => $onlineUsers]);
