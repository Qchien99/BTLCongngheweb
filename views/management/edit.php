<?php
    require_once "./config/db.php";
    $id_can_sua = $_GET['id'];
    $sql = "select * FROM management_dpm WHERE id=$id_can_sua";
    $db = new Database();
    $conn1 = $db->openConnection();
    $result = mysqli_query($conn1,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<i class='bx bx-menu'></i>
<h3>Thêm mới Tin tức-Sự kiện:</h3>
</div>
<form action="" method="post" style="max-width:90%;margin : 1rem auto;">
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" value="<?php echo $row['id']; ?>" disabled name="txtId">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Họ tên</label>
    <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="txtName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Chức vụ</label>
    <input type="text" class="form-control" value="<?php echo $row['position']; ?>" name="txtPosition">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">About</label>
    <textarea type="text" class="form-control" name="txtAbout"><?php echo $row['about'];?></textarea>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="txtEmail">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Image Source</label>
    <input type="text" class="form-control" value="<?php echo $row['img']; ?>" name="txtImg">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID Cơ quan</label>
    <input type="number" class="form-control" value="<?php echo $row['sb_id']; ?>" name="txtIdCoquan">
  </div>
  <input type="submit" name="btnFix" value="Lưu lại" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnFix'])){
        $id = $id_can_sua;
        $name = $_POST['txtName'];
        $pos = $_POST['txtPosition'];
        $about = $_POST['txtAbout'];
        $email = $_POST['txtEmail'];
        $img = $_POST['txtImg'];
        $idCoquan = $_POST['txtIdCoquan'];

        $data = array(
            'id' => $id,
            'name'=>$name,
            'position'=>$pos,
            'about'=>$about,
            'email'=>$email,
            'img'=>$img,
            'sb_id'=>$idCoquan
        );
        $mC = new managementController();
        $mC->update($data);
    }

?>