<?php
    require_once "./config/db.php";
    $id_can_sua = $_GET['id'];
    $sql = "select * FROM tblposts WHERE id=$id_can_sua";
    $db = new Database();
    $conn1 = $db->openConnection();
    $result = mysqli_query($conn1,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<i class='bx bx-menu'></i>
<h3>Chỉnh sửa Tin tức-Sự kiện:</h3>
</div>
<form action="" method="post" style="max-width:90%;margin : 1rem auto;">
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" value="<?php echo $row['id']; ?>" disabled name="txtId">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tiêu đề</label>
    <input type="text" class="form-control" value="<?php echo $row['title']; ?>" name="txtTitle">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tiêu đề phụ</label>
    <input type="text" class="form-control" value="<?php echo $row['sub_title']; ?>" name="txtSubTitle">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Nội dung</label>
    <textarea type="text" class="form-control" name="txtContent"><?php echo $row['content']; ?></textarea>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Thể loại</label>
    <input type="text" class="form-control" value="<?php echo $row['type']; ?>" name="txtType">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Hình ảnh</label>
    <input type="text" class="form-control" value="<?php echo $row['img']; ?>" name="txtImg">
  </div>
  <input type="submit" name="btnFix" value="Lưu lại" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnFix'])){
        $id = $id_can_sua;
        $title = $_POST['txtTitle'];
        $subTitle = $_POST['txtSubTitle'];
        $content = $_POST['txtContent'];
        $type = $_POST['txtType'];
        $img = $_POST['txtImg'];

        $data = array(
            'id' => $id,
            'title'=>$title,
            'sub_title'=>$subTitle,
            'content'=>$content,
            'type'=>$type,
            'img'=>$img
        );
        $postController = new postController();
        $postController->update($data);
    }

?>