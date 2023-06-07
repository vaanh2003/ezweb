<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZWeb</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="NavBar_wrapper__4m3K5" id="header">
        <div class="NavBar_logo__Rgo-5"><a href="<?php echo base_url; ?>"><img src="" alt="EZWeb"></a>
            <h4 class="NavBar_logoHeading__bs7MP">EZ WEB</h4>
        </div>
        <div class="NavBar_body__4Yhth d-flex-center">
            <div>
                <div class="Search_wrapper__Bwvae d-flex-center" aria-expanded="false">
                    <div class="Search_searchIcon__-23JY">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                    </div>
                    <input class="Search_input__GnMba" spellcheck="false" placeholder="Tìm kiếm khóa học, bài viết, video, ..." value="">
                </div>
            </div>
        </div>
        <div class="NavBar_actions__nSNzo">
        <?php
            if(isset($_SESSION['username']) && ($_SESSION['username']!="")){
                echo '<li><a href="index.php?act=userinfo">'.$_SESSION['username'].'</a></li>';
                echo '<li><a href="index.php?act=thoat">Đăng xuất</a></li>';
            }else{
        ?>
            <div id="navbar-actions-portal"></div><a href="#" class="NavBar_loginBtn__5DxZL">Đăng nhập</a>
        <?php } ?>

            
        </div>
    </div>
    <div class="App_withSidebar__8lwIi">
        {{content}}
    </div>
    <footer class="Footer_wrapper__RAsdB">
        <section class="index-module_grid__1q71E index-module_wide__3c1pI" style="max-width: 1100px;">
            <section class="index-module_row__-AHgh">
                <section class="index-module_col__2EQm9 index-module_c-12__u7UXF index-module_m-12__2CxUL index-module_l-12__340Ve">
                    <div class="Footer_bottom__J7kjW">
                        <p class="Footer_copyright__2WB24">©2023 EZ WEB. Nền tảng học lập trình hàng đầu Việt Nam</p>
                        <div class="Footer_social-list__gg6vl"><a class="Footer_social-item__GydUc social-item-first Footer_youtube__p9tJ3" href="https://www.youtube.com/c/F8VNOfficial" title="EZ Web trên Youtube" target="_blank" rel="noreferrer"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube-square" class="svg-inline--fa fa-youtube-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M186.8 202.1l95.2 54.1-95.2 54.1V202.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-42 176.3s0-59.6-7.6-88.2c-4.2-15.8-16.5-28.2-32.2-32.4C337.9 128 224 128 224 128s-113.9 0-142.2 7.7c-15.7 4.2-28 16.6-32.2 32.4-7.6 28.5-7.6 88.2-7.6 88.2s0 59.6 7.6 88.2c4.2 15.8 16.5 27.7 32.2 31.9C110.1 384 224 384 224 384s113.9 0 142.2-7.7c15.7-4.2 28-16.1 32.2-31.9 7.6-28.5 7.6-88.1 7.6-88.1z"></path>
                                </svg></a><a class="Footer_social-item__GydUc Footer_facebook__9kuWE" href="https://www.facebook.com/groups/f8official" title="EZ Web trên Facebook" target="_blank" rel="noreferrer"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.3V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0 -48-48z"></path>
                                </svg></a><a class="Footer_social-item__GydUc Footer_tiktok__OiXpU" href="https://www.tiktok.com/@f8official" title="EZ Web trên Tiktok" target="_blank" rel="noreferrer"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" class="svg-inline--fa fa-tiktok " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.25V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.2 121.2 0 0 0 1.86 22.17h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.14z"></path>
                                </svg></a></div>
                    </div>
                </section>
            </section>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
<style>
    body {
        margin: 0;
        font-family: system-ui,
            'Segoe UI',
            Roboto,
            Helvetica,
            Arial,
            sans-serif,
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol';
        ;
        text-rendering: optimizeLegibility;

    }

    .NavBar_wrapper__4m3K5 {
        --height: 66px;
        align-items: center;
        background-color: #fff;
        border-bottom: 1px solid #e8ebed;
        display: flex;
        font-size: 14px;
        height: var(--height);
        left: 0;
        padding: 0 28px;
        position: sticky;
        right: 0;
        top: 0;
        z-index: 20;
    }

    .NavBar_actions__nSNzo,
    .NavBar_body__4Yhth,
    .NavBar_logo__Rgo-5 {
        flex: 1 1;
    }

    .NavBar_logo__Rgo-5 {
        align-items: center;
        display: flex;
    }

    .NavBar_logoHeading__bs7MP {
        color: #000;
        font-size: 14px;
        font-weight: 700;
        margin-left: 16px;
    }

    .d-flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .Search_wrapper__Bwvae {
        border: 2px solid #e8e8e8;
        border-radius: 20px;
        flex: 1 1;
        height: 40px;
        padding: 0 16px 0 8px;
        transition: border-color .2s ease-in-out;
        width: 420px;
    }

    .Search_searchIcon__-23JY {
        background-color: #fff;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: 18px;
        border-radius: 50%;
        height: 32px;
        opacity: .7;
        transition: opacity .2s ease-in-out;
        width: 30px;
    }

    .Search_input__GnMba {
        border: none;
        caret-color: #444;
        flex: 1 1;
        height: 100%;
        outline: none;
        padding: 0 4px;
    }

    .NavBar_actions__nSNzo {
        align-items: center;
        display: flex;
        justify-content: flex-end;
    }

    .NavBar_loginBtn__5DxZL {
        background-color: #0d6efd;
        border-radius: 999px;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        padding: 9px 20px;
    }

    .App_withSidebar__8lwIi {
        display: flex;
        min-height: 100vh;
    }

    .App_sidebarWrap__3LwsB {
        flex-shrink: 0;
    }

    .Sidebar_wrapper__kUJFm {
        --width: 96px;
        align-items: center;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        left: 0;
        padding: 0 8px;
        position: -webkit-sticky;
        position: sticky;
        top: 74px;
        width: var(--width);
        z-index: 8;
    }

    .Sidebar_list__HnCzM {
        padding-left: 0;
    }

    .Sidebar_itemBtn__Q78b7.Sidebar_active__uvck8 {
        background-color: #e8ebed;
        color: #1a1a1a;
    }

    ul {
        list-style-type: none;
    }

    .Sidebar_itemBtn__Q78b7 {
        align-items: center;
        background-color: #fff;
        border-radius: 16px;
        color: #404040;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        height: 72px;
        justify-content: center;
        margin-top: 4px;
        width: 72px;
    }

    .Sidebar_itemBtn__Q78b7:hover {
        background-color: #f5f5f5;
        color: #1a1a1a;
    }

    a {
        outline: none;
        text-decoration: none;
    }

    .Sidebar_itemBtn__Q78b7 svg {
        font-size: 18px;
    }

    .svg-inline--fa {
        display: inline-block;
        height: 1em;
        vertical-align: -0.125em;
    }

    .Sidebar_itemBtn__Q78b7 span {
        font-size: 11px;
        font-weight: 600;
        margin-top: 6px;
    }

    .Footer_wrapper__RAsdB {
        background-color: #181821;
        color: #a9b3bb;
        overflow: hidden;
        padding: 40px 0 20px;
    }

    .index-module_grid__1q71E {
        padding: 0;
        margin: 0 auto;
    }

    .index-module_row__-AHgh {
        display: flex;
        flex-wrap: wrap;
        margin-left: -4px;
        margin-right: -4px;
    }

    .App_withSidebarContent__o4VlQ {
        flex: 1 1;
        max-width: 100%;
    }

    .Footer_bottom__J7kjW {
        align-items: baseline;
        display: flex;
    }

    .Footer_copyright__2WB24 {
        font-size: 14px;
    }

    .Footer_social-list__gg6vl {
        margin-left: auto;
    }

    .Footer_social-item__GydUc {
        font-size: 32px;
    }

    .Footer_social-item__GydUc.Footer_youtube__p9tJ3 {
        color: #eb2c3b;
    }

    .Footer_social-item__GydUc.Footer_facebook__9kuWE {
        color: #4867aa;
    }

    .Footer_social-item__GydUc+.Footer_social-item__GydUc {
        margin-left: 16px;
    }

    .Footer_social-item__GydUc.Footer_tiktok__OiXpU {
        color: #ccc;
    }

    @media (min-width: 800px) {
        .index-module_row__-AHgh {
            margin-left: -12px;
            margin-right: -12px;
        }
    }

    @media (min-width: 1200px) {
        .index-module_row__-AHgh {
            margin-left: -8px;
            margin-right: -8px;
        }
    }
    /* mới */
    .App_withSidebarContent__o4VlQ-db{
        display: flex;
    }
    .AppSidebarContentChild{
        padding-left: 90px;
        width: 65%;
    }
    .question-item{
        padding: 25px 25px 20px 25px;
        height: 70%;
        width: 100%;
    }
    .question{
        width: 100%;
        height: auto;
        border-radius: 13px;
        background-color: #f5f5f5;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .question-item-one{
        display: flex;
        justify-content: space-between;
    }
    .question-name-user{
        display: flex;
        align-items: center;
    }
    .question-name-user img{
        width: 30px;
        height: 30px;
    }
    .question-name-user p{
        margin-left: 10px;
        font-size: 12px;
        margin-bottom: 0;
    }
    .question-item-one{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .question-item-one button{
        background-color: #f5f5f5;
        border: none;
    }
    .date-time{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .date-time svg{
        margin-top: 2px;
        margin-right: 5px;
    }
    .number-cmt{
        display: flex;
        align-items: center;
    }
    .number-cmt p{
        margin-right: 3px;
        margin-bottom: 0;
    }
    .dropdown button{
        background-color: #f5f5f5;
        color: #000;
    }
    .dropdown button:hover{
        background-color: #f5f5f5;
    }
    .dropdown-menu{
        position: absolute;
        padding-left: 0px;
        right: 1px;
    }
    .cha-dropdown-menu{
        position: relative;
    }
    .button-container{
        width: 360px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .button-container button{
        width: 165px;
        height: 65px;
        border-radius: 15px;
        border: none;
        font-size: 17px;
        padding: none;
    }
    .sidebar-content-child{
        margin-top: 47px;
        padding-left: 50px;
        position: fixed;
        right:5%;
    }
    .banner-container{
        height: 430px;
        width: 360px;
        background-color: #404040;
        border-radius: 20px;
        overflow: hidden;
    }
    .banner-container img{
        height: 500px;
    }
    #dropdown-menu{
        display: none;
    }
</style>

</html>