<?php
    require_once "./config/db.php";
    $id_can_sua = $_GET['id'];
    $sql = "select * FROM tblsubjects WHERE id=$id_can_sua";
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
    <input type="text" class="form-control" value="<?php echo $row['id']; ?>" name="txtId" disabled>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tên</label>
    <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="txtName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tên Tiếng anh</label>
    <input type="text" class="form-control" value="<?php echo $row['e_name']; ?>" name="txtEName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="txtAddress">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" value="<?php echo $row['tel']; ?>" name="txtTel">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="txtMail">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Type</label>
    <input type="text" class="form-control" value="<?php echo $row['type']; ?>" name="txtType">
  </div>
  <input type="submit" name="btnFix" value="Lưu lại" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnFix'])){
        $id = $id_can_sua;
        $name = $_POST['txtName'];
        $eName = $_POST['txtEName'];
        $address = $_POST['txtAddress'];
        $tel = $_POST['txtTel'];
        $email = $_POST['txtMail'];
        $type = $_POST['txtType'];

        $data = array(
            'id' => $id,
            'name'=>$name,
            'e_name'=>$eName,
            'address'=>$address,
            'tel'=>$tel,
            'email'=>$email,
            'type'=>$type,
        );
        $sC = new subjectController();
        $sC->update($data);
    }

?>