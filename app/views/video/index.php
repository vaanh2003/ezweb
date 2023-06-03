<style>
    *{
    font-family: 'Roboto', sans-serif;
    margin: 0px;
    padding: 0px;
    
}
a{
    text-decoration: none;
    color:black;
}
body{
    position: relative;
    overflow: hidden;
    height: 100vh;
}
.video-in-list{
    padding-left: 15px;
}
.section-video{
    width: 100%;
    display: flex;
    height: 1000px;
}
.item-section-left{
    width: 78%;
    height: 100vh;
    overflow: auto;
}
.item-section-right{
    right:0;
    position: absolute;
    width: 22%;
    height: 100vh;
    overflow: auto;
    scrollbar-width: 0px;
    scrollbar-color: red;
}
.item-section-right::-webkit-scrollbar{
    width: 10px;
    color: aqua;
}
/* css video */
.item-video-left{
    display: flex;
    background-color:black;
    height: 540px;

}
.item-video-left iframe{
    margin: 0 auto;
}
/* css list video*/
.list-video-right{
    margin-left: 30px;
    margin-top: 20px;
    padding-bottom: 10px;
}
.list-video-right p{
    margin-bottom: 5px;
}
.item-video-in-list{
    width: 95%;
    height: 70px;
    padding: 5px 10px 5px 15px;
    border-bottom:0.5px solid rgb(224, 224, 224) ;
    display: flex;
    align-items:center;
}
.video-play{
    background-color: #FCDCD3;
}
.video-play div p{
    font-weight: 600;
}
.video-history{
    background-color:#F1F1F1;
}
.item-video-in-list div{
    width: 95%;
}
.item-video-in-list div p{
    font-size: 15px;

}
.item-video-in-list div div{
    display: flex;
    align-items:center;
    margin-top: 5px;
}
.item-video-in-list div div img{
    width: 15px;
    height: 15px;
    margin-right: 5px;

}
.item-video-in-list div div p{
    font-size: 11px;
    color: rgb(94, 94, 94);
}
.item-video-in-list img{
    width: 20px;
    height: 20px;
}
/* css tiêu đề video */
.item-noi-dung{
    padding-left: 120px;
    padding-right: 120px;
    height: 400px;
    margin-top: 50px;
    display: flex;
    justify-content:space-between;
}
.noi-dung {
    font-size: 25px;
}
.ngay-thang{
    font-size: 13px;
    color: rgb(52, 52, 52);
}
.item-noi-dung button{
    width: 190px;
    height: 40px;
    font-size: 15px;
    border: none;
    border-radius: 5px;
}  
.item-button-section{
    position: absolute;
    width: 100%;
    bottom: 0px ;
    height: 50px;
    background-color: #F0F0F0;
}
.item-button-section div{
    display: flex;
    align-items: center;
    width: 295px;
    height: 100%;
    margin: 0 auto;
}
.button-left{
    width: 145px;
    height: 32px;
    border: none;
    padding-right: 10px;
    font-size: 14px;
}
.button-right{
    width: 145px;
    height: 35px;
    padding-left: 10px;
    color: white;
    background-color: #F05123;
    border: none;
    border-radius: 5px;
    font-size: 14px;
}
</style>

<section class="section-video">
     <?php
     if($data==""){
        echo'rong';
     }
       
    ?> 
    <?php
        foreach ($_SESSION["video"] as $key => $value) {
                echo '
                
                    <div class="item-section-left">
                        <div class="item-video-left">
                            <iframe width="80%" height="100%" src="'.$value['link_video'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="item-noi-dung">
                            <div>
                                <p class="noi-dung">'.$value['ten'].'</p>
                                <p class="ngay-thang"> cập nhật tháng 2 năm 2023</p>
                            </div>
                            <button>+ Thêm vào xem sau</button>
                        </div>
                    </div>
                    <form method="post">
                        <input type="hidden" name="idvd" value="'.$value['id'].'">
                
                ';
            
        }
       

    ?>
        
        <div class="item-section-right">
            <div class="list-video-right">
                <p>Nội dung khóa học</p>
            </div>
            <div class="video-in-list">
                
                <?php
                
                    foreach ($data as $key => $value) { ?>
                        <a href="<?php echo base_url; ?>video?idvd=<?php echo''.$value['id'].''?>">
                        <?php echo '
                            <div class="item-video-in-list '; 
                            foreach ($_SESSION["video"] as $key => $session) {
                                if($value['id']== $session['id']){
                                    echo "video-play";
                                }
                            }
                                
                            
                            echo '">
                                <div>
                                    <p>1. '.$value['ten'].'</p>
                                    <div>
                                        <img src="./img/play.png" alt="">
                                        <p>'.$value['thoi_luong'].'</p>
                                    </div>  
                                </div>
                                <img src="./img/agree-removebg-preview.png" alt="">
                            </div>
                        </a>
                        
                        
                        ';
                    }

                ?>
                  <!-- <div class="item-video-in-list video-play">
                    <div>
                        <p>1. bạn sẽ làm được gì sau khóa học</p>
                        <div>
                            <img src="./img/play.png" alt="">
                            <p>31:15</p>
                        </div>  
                    </div>
                    <img src="./img/agree-removebg-preview.png" alt="">
                  </div> -->
                  <!-- <div class="item-video-in-list video-history">
                    <div>
                        <p>1. bạn sẽ làm được gì sau khóa học</p>
                        <div>
                            <img src="./img/play.png" alt="">
                            <p>31:15</p>
                        </div>  
                    </div>
                    <img src="./img/agree-removebg-preview.png" alt="">
                  </div>
                  <div class="item-video-in-list video-no-see">
                    <div>
                        <p>1. bạn sẽ làm được gì sau khóa học</p>
                        <div>
                            <img src="./img/play.png" alt="">
                            <p>31:15</p>
                        </div>  
                    </div>
                    <img src="./img/no-gree.jpg" alt="">
                  </div> -->
            </div>
            
        </div>
    </section>
    <div class="item-button-section">
        <div>
                 <input class="button-left" type="submit" value="< BÀI TRƯỚC" name="baitruoc">
                <input class="button-right" type="submit" value="BÀI TIẾP THEO >" name="baitiep">
            </form>
        </div>  
    </div>