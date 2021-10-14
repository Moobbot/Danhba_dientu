<?php
// Bước 1: Kết nối tới CSDL:
define('WWW', 'http://localhost/Danhba_dientu/');
define('HOST', 'localhost');
define('USER', 'root');
const PASS = '';
const DB = 'tlu_phonebook';
$conn = mysqli_connect(HOST, USER, PASS, DB);
if (!$conn) {
    die('Không thể kết nối');
}