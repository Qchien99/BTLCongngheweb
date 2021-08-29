
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
            foreach($employees as $employee){
        ?>
            <tr>
                <td scope="row"><?php echo $employee[0]; ?></td>
                <td><?php echo $employee[1]; ?></td>
                <td><?php echo $employee[2]; ?></td>
                <td><?php echo $employee[3]; ?></td>
                <td><?php echo $employee[4]; ?></td>
                <td><?php echo $employee[6]; ?></td>
                <td><a href="index.php?controller=employee&action=viewEdit&id=<?php echo $employee[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=employee&action=delete&id=<?php echo $employee[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>