
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
            foreach($sjs as $sj){
        ?>
            <tr>
                <td scope="row"><?php echo $sj[0]; ?></td>
                <td><?php echo $sj[1]; ?></td>
                <td><?php echo $sj[2]; ?></td>
                <td><?php echo $sj[3]; ?></td>
                <td><?php echo $sj[4]; ?></td>
                <td><?php echo $sj[5]; ?></td>
                <td><a href="index.php?controller=subject&action=viewEdit&id=<?php echo $sj[0]; ?>"><i class="bi bi-pencil-square"></i></a></td>
                <td><a href="index.php?controller=subject&action=delete&id=<?php echo $sj[0]; ?>"><i class="bi bi-archive-fill"></i></a></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>