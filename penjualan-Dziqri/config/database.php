<?php
// config/database.php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'penjualan';

// inisialisasi koneksi dengan MYSQLi secara Object Oriented
$koneksi = new mysqli($host, $user, $pass, $db);