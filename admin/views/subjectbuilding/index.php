
<i class='bx bx-menu'></i>
<h3>Danh sách Bộ môn-Trung tâm:</h3>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Tên Tiếng anh</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($sbs as $sb){
        ?>
            <tr>
                <td scope="row"><?php echo $sb[0]; ?></td>
                <td><?php echo $sb[1]; ?></td>
                <td><?php echo $sb[2]; ?></td>
                <td><?php echo $sb[3]; ?></td>
                <td><?php echo $sb[4]; ?></td>
                <td><?php echo $sb[5]; ?></td>
                <td><a href="index.php?controller=subjectBuilding&action=viewEdit&id=<?php echo $sb[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=subjectBuilding&action=delete&id=<?php echo $sb[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>