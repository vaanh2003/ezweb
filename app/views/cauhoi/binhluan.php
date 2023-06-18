<style>
    .question-content{
        width: 85%;
        height: 500px;
    }
    .question-content form textarea{
        width: 100%;
        height: 200px;
        border-radius: 20px;
    }
    .question-content form button{
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
    .AppSidebarContentChild-item-cauhoi div{
        width: 85%;
        border-radius: 10px;
        min-height: 100px;
        background:#f5f5f5;
    }
    .AppSidebarContentChild-item-cauhoi div p{
        padding: 10px 0 0 10px;
        width: 95%;
    }
    .AppSidebarContentChild-item-traloi div p{
        padding: 10px 0 30px 10px;
        width: 95%;
        margin-bottom: 0px;
    }
    .AppSidebarContentChild-item-traloi div{
        background-color:#CCECE6 ;
        width: 84%;
        border-radius: 10px;
    }
    .AppSidebarContentChild-item-traloi{
        padding-left: 40px;
        margin-top: 15px;
    }
    .username {
        display: flex;
        align-items: center;
        padding: 5px 0 0 5px;
        height: 50px;
    }
    .username img{
        width: 35px;
        height: 35px;
    }
</style>
    <div class="App_withSidebarContent__o4VlQ">
        <div class="App_withSidebarContent__o4VlQ App_withSidebarContent__o4VlQ-db">
        <div class="AppSidebarContentChild">
            <div class="AppSidebarContentChild-item-cauhoi">
                    <h3>CÂU HỎI</h3>
                    <p><?php  echo''.$data[1][0]['name'].''; ?></p>
                    <div>
                        <p><?php  echo''.$data[0]['noi_dung'].''; ?></p>
                    </div>
                </div>
                <?php if(count($data)>2){
                    $i=0;
                for($i=0;$i<count($data[3]);$i++) {
                ?>
                <div class="AppSidebarContentChild-item-traloi">
                    <div>
                        <div class="username">
                            <img src="./img/good-review.png" alt="">
                            <p><?php echo $data[3][$i][0]['name'] ?></p>
                        </div>
                        <p><?php echo $data[2][$i]['noi_dung'] ?></p>
                    </div>
                </div>
                <?php }}?>
                <h2 class="">Bình luận</h2>
                <div class="question-content">
                    <form method="post">
                        <input type="hidden" name="iduser" value="<?php if(isset($_SESSION['username'])){
                            echo '' . $_SESSION['username']['id'] . '';
                            }
                            ?>">
                        <input type="hidden" name="idch" value="<?php  echo''.$data[0]['id'].''; ?>">
                        <textarea name="message"></textarea></br>
                        <button type="submit">Gửi</button>
                    </form>
                </div>
            </div>
            <div class='sidebar-content-child'>
                <div class='button-container'>
                    <a href="<?php echo base_url;?>cauhoi?iduser=<?php echo ''.$_SESSION['username']['id'].''?>">
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
    