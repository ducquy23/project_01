<?php get_header('', 'Update người dùng'); ?>
<div class="content-main">
    <h3>Update mới User</h3>
    <form action="?role=admin&mod=users&action=update" enctype="multipart/form-data" class="container" method="POST">
        <div class="form-group">
            <label for="name">Tên user:</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Name" id="name" value="">
            <input type="hidden" name="id" value="">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="text" name="password" class="form-control" placeholder="Enter password" id="pwd" value="" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" value="" >
        </div>
        <div class="form-group">
            <label for="img">Ảnh sản phẩm</label> <br>
            <img src="/public/images/<?php ?>" alt="" style="width: 100px;margin-bottom: 10px;"> <br>
            <input type="file" name="img" id="img">
        </div>
        <div class="form-submit">
            <button type="submit" class="btn btn-success" name="submit">Update User</button>
        </div>
    </form>
</div>
</article>
</div>

<div class="clear-both"></div>
<?php get_footer('', 'Update người dùng') ?>