<div class="App_withSidebarContent__o4VlQ">
    <h1>Liên hệ với chúng tôi</h1>
    <div class="container">
        <form method="post" action="<?php base_url ?>guimail">
            <div class="mb-3">
                <label class="form-label">Email</label>
                <?php if (isset($_SESSION['username'])) { ?>
                    <input type="email" class="form-control bg-light" name="email" placeholder="Nhập email của bạn" value="<?php echo $_SESSION['username']['email']; ?>">
                <?php } else { ?>
                    <input type="email" class="form-control bg-light" name="email" placeholder="Nhập email của bạn">
                <?php } ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nội dung liên hệ</label>
                <textarea class="form-control bg-light" name="noidunglienhe" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <button name="btn" type="submit" class="btn btn-primary">GỬI YÊU CẦU</button>
            </div>
        </form>
    </div>
    <?php if (isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        echo '<span style="color:blue;">' . $message . '</span>';
    }
    unset($_SESSION['message']);
    ?>
</div>