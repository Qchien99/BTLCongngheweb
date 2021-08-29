
<i class='bx bx-menu'></i>
<h3>Danh sách tin tức</h3>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Create date</th>
            <th>Type</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($newsPN as $news){
        ?>
            <tr>
                <td scope="row"><?php echo $news[0]; ?></td>
                <td><?php echo $news[1]; ?></td>
                <td><?php echo $news[3]; ?></td>
                <td><?php echo $news[5]; ?></td>
                <td><a href="index.php?controller=news&action=viewEdit&id=<?php echo $news[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=news&action=delete&id=<?php echo $news[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>