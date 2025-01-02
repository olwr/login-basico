<?php
defined('CONTROL') or die('Access denied!');

// logout
session_destroy();

// go back to index
header('Location: index.php?route=login');
