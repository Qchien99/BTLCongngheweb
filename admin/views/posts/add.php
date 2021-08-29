<?php
    require_once "./config/db.php";
    $sql = "select id FROM tblposts order by id desc limit 1";
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
    <label class="form-label">Tiêu đề</label>
    <input type="text" class="form-control" name="txtTitle">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Tiêu đề phụ</label>
    <input type="text" class="form-control" name="txtSubTitle">
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Nội dung</label>
    <textarea type="text" class="form-control" name="txtContent"></textarea>
  </div>
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">Thể loại</label>
    <input type="text" class="form-control" name="txtType">
  </div>
  <input type="submit" name="btnAdd" value="Thêm mới" class="btn btn-success">
</form>
<?php
    if(isset($_POST['btnAdd'])){
        $id = $nextID;
        $title = $_POST['txtTitle'];
        $subTitle = $_POST['txtSubTitle'];
        $content = $_POST['txtContent'];
        $type = $_POST['txtType'];

        $data = array(
            'id' => $id,
            'title'=>$title,
            'sub_title'=>$subTitle,
            'content'=>$content,
            'type'=>$type,
        );
        $postController = new postController();
        $postController->insert($data);
    }

?>