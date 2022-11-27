<?php get_header('') ?>

<body>
    <style>
        .footer {
            margin-top: 100px;
        }
    </style>
    <div class="container">
        <h2 style="margin: 30px 0;">Create Account</h2>
        <form action="" method="POST">
            <p id="pass" class="form-group">
                <i class='bx bx-envelope' style="font-size:20px ;"> Email</i>
                <input id="type" name="email" class="form-control" type="text" placeholder="david.lucas@gmail.com">
            </p>
            <p class="form-group">
                <i class='bx bxs-user' style="font-size:20px ;"> Fullname</i>
                <input type="text" name="fullname" class="form-control" placeholder="David.Lucas">
            </p>
            <p class="form-group">
                <i class='bx bx-low-vision' style="font-size:20px ;"> Password</i>
                <input class="form-control" name="password" type="password" placeholder="******">
            </p>
            <button class="btn btn-primary" name="submit" type="submit">Create Now</button>
        </form>
    </div>
    <script src="./scr/js/signin.js"></script>
</body>

<?php get_footer('') ?>