<?php
$hostname = "localhost"; //d?a ch? hosting
$dbuser = "root";   // Tên dang nh?p vào database
$dbpass = "";    // pass dang nh?p vào database, XAMPP cài pass m?c d?nh là r?ng
$dbname = "dunuts";
// K?t n?i d?n CSDL
$conn = mysqli_connect('localhost', 'root', '', 'dunuts');

// Thi?t l?p ch? d? ti?ng Vi?t
mysqli_query($conn,'set names utf8');
;?>