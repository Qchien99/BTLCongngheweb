<?php
    require_once "./config/db.php";
    $sql = "select id FROM tblemployees order by id desc limit 1";
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
    <label class="form-label">Họ tên</label>
    <input type="text" class="form-control" name="txtName">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Chức vụ</label>
    <input type="text" class="form-control" name="txtPosition">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">About</label>
    <textarea type="text" class="form-control" name="txtAbout"></textarea>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="txtEmail">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Image Source</label>
    <input type="text" class="form-control" name="txtImg">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID Cơ quan</label>
    <input type="number" class="form-control" name="txtIdCoquan">
  </div>
  <input type="submit" name="btnAdd" value="Thêm mới" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnAdd'])){
        $id = $nextID;
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
        $mC = new employeeController();
        $mC->insert($data);
    }

?>