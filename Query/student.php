<?php 
    function index(){
        require_once "database.php";// Memanggil file koneksi ke database
        $students = $conn -> query("SELECT *FROM students")->fetchAll();
        $conn = null ;
        return $students;
    }

    function save($input){
        require_once "database.php";
        $code = $input['student_code'];
        $name = $input['student_name'];

        $queri = "INSERT INTO students (code,name) VALUES ('".$code."','".$name."')" ;
        if ($conn->exec($queri) == false) {
            print_r($conn->errorInfo()[2]);
        }
        else {
            header('location: index.php?page=student-data');
        }
        $conn = null ;
    }
    function find($id){
        require_once "database.php";//memanggil koneksi database
        $student =$conn->query("SELECT * FROM students where `id`= $id")->fetch(); //menampilkan data dengan fetch
        //$conn = nulll; //menutup kembali koneksi database
        return $student; //mengembalikan nilai dari hasil query
    }

    function update($post){
        require("database.php");
        $id = $post['id'];
        $code = $post['student_code'];
        $name = $post['student_name'];

        $sql = "UPDATE students SET code='$code', name='$name' WHERE id='$id'" ;
        
        if($conn->exec($sql) === false) {
            print_r($conn->errorInfo()[2]);
        }else{
            header('location: index.php?page=student-data');
        }
        $conn = null;
    }

    function delete($id){
        require("database.php");
        $id = $_GET['id'];

   
    $sql ="DELETE FROM students WHERE id='$id'";

   
    if($conn->exec($sql) === false) {
        print_r($conn->errorinfo()[2]);
    }else{
   
    header('location: index.php?page=student-data');

    }
    $conn = null;

    }


?>