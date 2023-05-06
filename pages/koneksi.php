<?php
//  OOP

    $hostname = 'localhost:3306';
    $username = 'root';
    $password = '';   
    $database = 'arkatama_store_15';

{
    $conn = new mysqli($hostname, $username, $password, $database);

    if ($conn->connect_error){
        die('Koneksi Gagal: ' . $conn->connect_error);
    }
    echo 'Connected successfully';
}