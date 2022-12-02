<?php get_header(''); ?>
<div class="container-pay">
    <div class="container-pay__info">
        <h3 class="container-pay__heading">
            THÔNG TIN GIAO HÀNG
        </h3>
        <form action="/action_page.php" class="container">
            <div class="form-group">
                <label for="">Họ Và Tên:</label>
                <input type="text" class="form-control" placeholder="Enter Fullname" id="email">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="email" class="form-control" placeholder="Enter Email" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="text" class="form-control" placeholder="Enter Phone" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" placeholder="Enter Address" id="pwd">
            </div>
            <div class="container-pay__order">
                <table>
                    <thead>
                        
                    </thead>
                </table>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
<?php get_footer(''); ?>