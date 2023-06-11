<style>
    .question-content {
        width: 85%;
        height: 500px;
    }

    .question-content form textarea {
        width: 100%;
        height: 350px;
        border-radius: 20px;
    }

    .question-content form button {
        width: 130px;
        height: 45px;
        border: none;
        border-radius: 5px;
        background-color: #7CF500;
        color: white;
        font-size: 20px;
        font-weight: 600;
        float: right;
    }
</style>
<div class="App_withSidebarContent__o4VlQ">
    <div class="App_withSidebarContent__o4VlQ App_withSidebarContent__o4VlQ-db">
        <div class="AppSidebarContentChild">
            <h2 class="">CÂU HỎI</h2>
            <div class="question-content">
                <form method="post">
                    <input type="hidden" name="iduser" value="<?php

                                                                echo '' . $_SESSION['username']['id'] . ''


                                                                ?>">
                    <textarea name="message" placeholder="Viết câu hỏi của bạn"></textarea></br>
                    <button type="submit">Gửi</button>
                </form>
            </div>
        </div>
        <div class='sidebar-content-child'>
            <div class='button-container'>
                <a href="<?php echo base_url; ?>cauhoi?iduser=<?php echo '' . $_SESSION['username']['id'] . '' ?>">
                    <button>Đặt câu hỏi</button>
                </a>
                <button>Đăng Blog</button>
            </div>
            <div class='banner-container'>
                <img src='https://inkythuatso.com/uploads/thumbnails/800/2022/03/anh-genshin-impact-4k-klee-17-10-24-48.jpg' alt=''>
            </div>
        </div>
    </div>
    </h1>
</div>