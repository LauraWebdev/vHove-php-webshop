<?php
  // No errors in api
  error_reporting(E_ALL ^  E_NOTICE); 
  
  // Start using sessions
  session_start();
  
  // Set session
  $_SESSION['cart'] = [];
  $currentCart = [];
  
  // Response
  echo json_encode([true, $currentCart]);
?>