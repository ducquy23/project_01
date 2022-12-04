
<?php get_header('', 'Trang thêm mới user') ?>
<div class="content-main">
    <h3>Thêm mới User</h3>
    <form action="?role=admin&mod=users&action=create" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên user:</label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter Name" id="name">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
       
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Add User</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer('', 'Tạo user') ?>