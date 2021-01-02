<?php
    
    require '../functions.php';

    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM booking 
                WHERE 
                book_nama LIKE '%$keyword%' OR
                book_phone LIKE '%$keyword%' OR
                book_kursi LIKE '%$keyword%' 
                ";
                
    $mhs_search = query($query);
?>