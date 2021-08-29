
<i class='bx bx-menu'></i>
<h3>Thêm mới Tin tức-Sự kiện:</h3>
</div>
<form action="" method="post" style="max-width:90%;margin : 1rem auto;">
  <div class="mb-3" style="min-width:100%;">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name="txtId">
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
        $id = $_POST['txtId'];
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
        $newsController = new newsController();
        $newsController->insertIntoNews($data);
    }

?>