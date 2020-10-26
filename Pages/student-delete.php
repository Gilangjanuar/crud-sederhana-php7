<?php
    require_once("Query/student.php"); //import file student
    $student = find($_GET['id']); //panggil fucktion untuk menampilkan data berdasarkan ID
    $no = 1;
    
    delete($_GET);
?>

