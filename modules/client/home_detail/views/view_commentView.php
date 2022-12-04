<?php
$id_prd = isset($_REQUEST['id_prd']) ? $_REQUEST['id_prd'] : "";
$count = 0;
foreach ($list_comment as $values) {
    $count++;
}
// print_r($_SESSION['user']);
?>
<?php if (isset($_SESSION['user'])) { ?>
    <div class="comment__header">
        <p class="comment__title">ĐÁNH GIÁ</p>
    </div>
    <div class="comment__body">
        <div class="comment__action">
            <div class="comment__quantity-comment"><?php echo $count ?> bình luận</div>
          
        </div>
        <div class="comment__write">
            <form action="?role=client&mod=home_detail&action=comment" method="POST">
                <div class="comment__item">
                    <input type="text" name="content" placeholder="Viết bình luận" class="comment__input">
                    <input type="hidden" name="id_prd" value="<?php echo $id_prd ?>">
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']['id'] ?>">
                    <div class="comment__btn">
                        <button type="submit">Đăng</button>
                    </div>
                </div>
            </form>
        </div>
        <?php foreach ($list_comment as $values) : ?>
            <div class="comment_user">
                <div class="comment__img"><img src="/public/images/img_client/user.png" alt=""></div>
                <div class="comment__info">
                    <p class="comment__name"><a href="" class="comment__link"><?php echo $values['fullname'] ?></a></p>
                    <p class="comment__content"><?php echo $values['content'] ?></p>
                    <div class="comment__time"><?php echo $values['comment_date'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php } else { ?>
    <div class="comment__header">
        <p class="comment__title">ĐÁNH GIÁ </p>
    </div>
    <div class="comment__body">
        <div class="comment__action">
            <div class="comment__quantity-comment"><?php echo $count; ?> bình luận</div>
            
        </div>
        <div class="comment__write">
            <form action="?role=client&mod=home_detail&action=comment" method="POST">
                <div class="comment__item">
                    <input type="text" name="content" placeholder="Viết bình luận" class="comment__input" disabled>
                    <div class="comment__btn">
                        <button type="submit" disabled>Đăng</button>
                    </div>
                </div>
                <h4 class="alert alert-danger text-center">Đăng nhập để bình luận</h4>
            </form>
        </div>
        <?php foreach ($list_comment as $values) : ?>
            <div class="comment_user">
                <div class="comment__img"><img src="/public/images/img_client/user.png" alt=""></div>
                <div class="comment__info">
                    <p class="comment__name"><a href="" class="comment__link"><?php echo $values['fullname'] ?></a></p>
                    <p class="comment__content"><?php echo $values['content'] ?></p>
                    <div class="comment__time"><?php echo $values['comment_date'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php } ?>