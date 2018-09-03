<?php
// ==================================
// Author: Charneco Samuel
// Title: Website
// Description: Website with Database
// Date: 30.08.2018
// Version: 1.0
// ==================================
session_start();
$_SESSION = array();
session_destroy();
header("Location: index.php");