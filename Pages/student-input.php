<h3> Input Data Mahasiswa </h3>
<form method="POST" action="#">
  <div class="form-group">
    <label for="student_code">NRP</label>
    <input type="text" class="form-control" name="student_code" placeholder="Masukan NRP" required>
  </div>
  <div class="form-group">
    <label for="student_name">Nama</label>
    <input type="text" class="form-control" name="student_name" placeholder="Masukan Nama" required>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    if (isset($_POST['student_code']) && isset($_POST['student_name'])) {
        include "Query/student.php";
        save($_POST);
    }
?>