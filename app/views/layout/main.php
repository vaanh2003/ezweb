<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZWeb</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="input-group w-50">
            <input type="text" class="form-control" placeholder="Tìm kiếm khoá học, tài liệu ....">
            <button class="btn bg-white border d-flex align-items-center" type="button" id="button-addon1"><i class='bx bx-search '></i></button>
        </div>
        <div class="header_img">
            <?php if (isset($_SESSION['username'])) : ?>
                <li class="nav-item dropdown" style="list-style: none;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào, <?= $_SESSION['username']['name'] ?>
                    </a>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="<?php echo base_url; ?>user">Thay đổi thông tin</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url; ?>logout">Đăng xuất</a></li>
                    </ul>
                </li>
            <?php else : ?>
                <a href="<?php echo base_url; ?>login" class="btn btn-primary m-2">Đăng nhập</a>
                <a href="<?php echo base_url; ?>signup" class="btn btn-primary m-2">Đăng ký</a>
            <?php endif ?>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="<?php echo base_url; ?>home" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">EZ WEB</span> </a>
                <div class="nav_list">
                    <a href="<?php echo base_url; ?>home" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a>
                    <a href="<?php echo base_url; ?>khoahoc" class="nav_link"> <i class='bx bx-book-open'></i> <span class="nav_name">Khoá Học</span> </a>
                    <a href="<?php echo base_url; ?>tailieu" class="nav_link"> <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Tài Liệu</span> </a>
                    <a href="<?php echo base_url; ?>blog" class="nav_link"><i class='bx bx-message-square-detail nav_icon'></i><span class="nav_name">Cộng Đồng</span>
                    </a>
                    <a href="<?php echo base_url; ?>contact" class="nav_link"> <i class='bx bx-phone'></i> <span class="nav_name">Liên Hệ</span> </a>
                </div>
            </div> <a href="<?php echo base_url; ?>logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="">
        {{content}}
    </div>
    <footer class="footer">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="<?php echo base_url; ?>home"><span>EZ WEB</span></a></h3>
                <p class="links"><a href="<?php echo base_url; ?>home">Home</a><strong> &middot; </strong><a href="<?php echo base_url; ?>khoahoc">Khoá Học</a><strong> &middot; </strong><a href="<?php echo base_url; ?>tailieu">Tài Liệu</a><strong> &middot; </strong><a href="<?php echo base_url; ?>blog">Cộng Đồng</a><strong> &middot; </strong><a href="<?php echo base_url; ?>contact">Liên Hệ</a></p>
                <p class="company-name">EZWEB.WEBSITE &copy; 2023</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Tòa nhà T, QTSC9, Tô Ký</span>Quận 12, Thành phố Hồ Chí Minh, Việt
                        Nam</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +84 </p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">ezweb@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>Thông tin liên hệ</h4>
                <p>EZ WEB là một trong những trang chia sẻ khoa học miễn phí ở Việt Nam</p>
                <div class="social-links social-icons"><a href="https://www.facebook.com/profile.php?id=100093419923442"><i class='bx bxl-facebook-circle'></i></a>
                </div>
            </div>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>

</html>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    :root {
        --header-height: 3rem;
        --nav-width: 68px;
        --first-color: #4723D9;
        --first-color-light: #AFA5D9;
        --white-color: #F7F6FB;
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;
        --z-fixed: 100
    }

    *,
    ::before,
    ::after {
        box-sizing: border-box
    }

    body {
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s
    }

    a {
        text-decoration: none
    }

    .header {
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s
    }

    .header_toggle {
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer
    }

    .header_img {
        display: flex;
        justify-content: center;
    }

    .header_img img {
        width: 40px
    }

    .l-navbar {
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed)
    }

    .nav {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden
    }

    .nav_logo,
    .nav_link {
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
        margin-bottom: 2rem
    }

    .nav_logo-icon {
        font-size: 1.25rem;
        color: var(--white-color)
    }

    .nav_logo-name {
        color: var(--white-color);
        font-weight: 700
    }

    .nav_link {
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s
    }

    .nav_link:hover {
        color: var(--white-color)
    }

    .nav_icon {
        font-size: 1.25rem
    }

    .show {
        left: 0
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
        color: var(--white-color)
    }

    .height-100 {
        height: 100vh
    }

    .footer {
        position: absolute;
        left: 0;
        margin-left: 60px;
    }

    footer {
        background-color: #292c2f;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
        margin-top: 80px;
        color: #fff;
    }

    .footer-navigation h3 {
        margin: 0;
        font: normal 36px Cookie, cursive;
        margin-bottom: 20px;
        color: #fff;
    }

    .footer-navigation h3 a {
        text-decoration: none;
        color: #fff;
    }

    .footer-navigation h3 span {
        color: #5383d3;
    }

    .footer-navigation p.links a {
        color: #fff;
        text-decoration: none;
    }

    .footer-navigation p.company-name {
        color: #8f9296;
        font-size: 14px;
        font-weight: normal;
        margin-top: 20px;
    }

    .footer-contacts p {
        display: inline-block;
        color: #ffffff;
        vertical-align: middle;
    }

    .footer-contacts p a {
        color: #5383d3;
        text-decoration: none;
    }

    .fa.footer-contacts-icon {
        background-color: #33383b;
        color: #fff;
        font-size: 18px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 38px;
        margin: 10px 15px 10px 0;
    }

    span.new-line-span {
        display: block;
        font-weight: normal;
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-about h4 {
        display: block;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-about p {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    div.social-links {
        margin-top: 20px;
        color: #fff;
    }

    .social-links a {
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color: #33383b;
        border-radius: 2px;
        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    @media (max-width:767px) {
        .footer-contacts {
            margin: 30px 0;
        }
    }


    @media screen and (min-width: 768px) {
        body {
            margin: calc(var(--header-height) + 1rem) 0 0 0;
            padding-left: calc(var(--nav-width) + 2rem)
        }

        .header {
            height: calc(var(--header-height) + 1rem);
            padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
        }


        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        .show {
            width: calc(var(--nav-width) + 156px)
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 188px)
        }
    }

    .App_withSidebarContent__o4VlQ-db {
        display: flex;
    }

    .AppSidebarContentChild {
        padding-left: 90px;
        width: 65%;
    }

    .question-item {
        width: 95%;
        margin: 0 auto;
        padding: 25px 25px 20px 25px;
        height: 70%;
    }

    .question {
        width: 100%;
        height: auto;
        border-radius: 13px;
        background-color: #f5f5f5;
        display: flex;
        align-items: center;
    }

    .question-item-one {
        display: flex;
        justify-content: space-between;
    }

    .question-name-user {
        display: flex;
        align-items: center;
    }

    .question-name-user img {
        width: 30px;
        height: 30px;
    }

    .question-name-user p {
        margin-left: 10px;
        font-size: 12px;
        margin-bottom: 0;
    }

    .question-item-one {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .question-item-one button {
        background-color: #f5f5f5;
        border: none;
    }

    .date-time {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .date-time svg {
        margin-top: 2px;
        margin-right: 5px;
    }

    .number-cmt {
        display: flex;
        align-items: center;
    }

    .number-cmt p {
        margin-right: 3px;
        margin-bottom: 0;
    }

    .dropdown button {
        background-color: #f5f5f5;
        color: #000;
    }

    .dropdown button:hover {
        background-color: #f5f5f5;
    }

    .dropdown-menu {
        position: absolute;
        padding-left: 0px;
        right: 1px;
    }

    .dropdown-menu li button {
        width: 100%;
        background-color: white;
    }

    .cha-dropdown-menu {
        position: relative;
    }

    .button-container {
        width: 360px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }


    .button-container button {
        width: 165px;
        height: 65px;
        border-radius: 15px;
        border: none;
        font-size: 17px;
        padding: none;
    }


    .sidebar-content-child {
        margin-top: 47px;
        padding-left: 50px;
        position: fixed;
        right: 5%;
    }

    .banner-container {
        height: 430px;
        width: 360px;
        background-color: #404040;
        border-radius: 20px;
        overflow: hidden;
    }


    .banner-container img {
        height: 500px;
    }


    #dropdown-menu {
        display: none;
    }
</style>