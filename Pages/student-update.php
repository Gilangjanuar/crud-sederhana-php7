<?php
    require_once("Query/student.php");
    $student = find($_GET['id']);
    $no = 1;
?>
    <?php if($student) : ?>
    <h3>Ubah Data Mahasiswa Data Mahasiswa </h3>
    <form method="post" action="#">
    <Input class= "form-control" type="hidden" name="id" value="<?= $student['id']?>"/>
  
    <div class="form-group">
        <label for="student_code">NRP</label>
        <input type="text" class="form-control" name="student_code" value="<?= $student['code'] ?>">
    </div>
    <div class="form-group">
        <label for="student_name">Nama</label>
        <input type="text" class="form-control" name="student_name" value="<?= $student['name'] ?>">
    </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php endif;?>

<?php
    if(isset($_POST['student_code']) && isset($_POST['student_name'])){ 
      update($_POST);
    }
?>