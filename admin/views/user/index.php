
<i class='bx bx-menu'></i>
<h3>Danh sách Người dùng:</h3>
</div>
<table class="table">
    <thead>
        <tr>
            <th>UserID</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($users as $user){
        ?>
            <tr>
                <td scope="row"><?php echo $user[0]; ?></td>
                <td><?php echo $user[1]; ?></td>
                <td><?php echo $user[3]; ?></td>
                <td><?php echo $user[4]; ?></td>
                <td><?php echo $user[6]; ?></td>
            </tr>
        <?php
            }

        ?>
    </tbody>
</table>