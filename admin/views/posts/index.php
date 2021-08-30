
<i class='bx bx-menu'></i>
<h3>Danh sách tin tức</h3>
</div>
<table class="table max-width">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Ngày tạo</th>
            <th>Thể loại</th>
            <th>Hình ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($posts as $post){
        ?>
            <tr>
                <td scope="row"><?php echo $post[0]; ?></td>
                <td><?php echo $post[1]; ?></td>
                <td><?php echo $post[3]; ?></td>
                <td><?php echo $post[5]; ?></td>
                <td><?php echo $post[6]; ?></td>
                <td><a href="index.php?controller=post&action=viewEdit&id=<?php echo $post[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=post&action=delete&id=<?php echo $post[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>