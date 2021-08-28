
<i class='bx bx-menu'></i>
<h3>Danh sách Cán bộ:</h3>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Chức vụ</th>
            <th>Về bản thân</th>
            <th>Email</th>
            <th>ID Cơ quan</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($managements as $management){
        ?>
            <tr>
                <td scope="row"><?php echo $management[0]; ?></td>
                <td><?php echo $management[1]; ?></td>
                <td><?php echo $management[2]; ?></td>
                <td><?php echo $management[3]; ?></td>
                <td><?php echo $management[4]; ?></td>
                <td><?php echo $management[6]; ?></td>
                <td><a href="index.php?controller=management&action=edit&id=<?php echo $management[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=management&action=delete&id=<?php echo $management[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>