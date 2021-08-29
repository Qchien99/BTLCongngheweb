<?php
    require_once "./config/db.php";
    $sql = "select id FROM tblsubjects order by id desc limit 1";
    $db = new Database();
    $conn1 = $db->openConnection();
    $result = mysqli_query($conn1,$sql);
    $num = mysqli_fetch_object($result)->id;
    $increase = 1;
    $nextID = $num+$increase;
?>
<i class='bx bx-menu'></i>
<h3>Thêm mới Tin tức-Sự kiện:</h3>
</div>
<form action="" method="post" style="max-width:90%;margin : 1rem auto;">
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" value="<?php echo $nextID; ?>" name="txtId" disabled>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tên</label>
    <input type="text" class="form-control" name="txtName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tên Tiếng anh</label>
    <input type="text" class="form-control" name="txtEName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" name="txtAddress">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" name="txtTel">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="txtMail">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Type</label>
    <input type="text" class="form-control" name="txtType">
  </div>
  <input type="submit" name="btnAdd" value="Thêm mới" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnAdd'])){
        $id = $nextID;
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
        $sC->insert($data);
    }

?>