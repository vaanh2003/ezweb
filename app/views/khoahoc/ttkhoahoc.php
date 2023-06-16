<div class="App_withSidebarContent__o4VlQ">
    <section class="index-module_grid__1q71E index-module_fullWidth__3X-6x" style="max-width: 1920px;">
        <section class="index-module_row__-AHgh CourseDetail_wrapper__myy9O">
            <section
                class="index-module_col__2EQm9 index-module_c-12__u7UXF index-module_m-12__2CxUL index-module_l-8__yebHm">
                <h1 class="CourseDetail_courseName__g37pH"><?php echo $data[0]['name']; ?></h1>
                <div class="CourseDetail_textContent__Y2-aV"><?php echo $data[0]['mo_ta']; ?></div>
            </section>
            <section
                class="index-module_col__2EQm9 index-module_c-12__u7UXF index-module_m-12__2CxUL index-module_l-4__3tf5p">
                <div class="CourseDetail_purchaseBadge__CZ9PK">
                    <div class="CourseDetail_imgPreview__qGZSi">
                        <div class="CourseDetail_bg__Xacm8"
                            style="background-size: contain, cover; background-image: url(&quot;<?php echo $data[0]['img']; ?>&quot;);">
                        </div>
                    </div>
                    <h5>Miễn phí</h5>
                    <?php
                    $temp = 0;
                    foreach ($data[2] as $key => $value) {
                        if ($value['khoa_hoc_id'] == $data[0]['id']) {
                            echo '<button type="submit" name="dangkykh"
                                class="Button_btn__RW1e_2 Button_primary__86yfm_2 CourseDetail_learnNow__A3hLp">ĐÃ ĐĂNG KÝ
                            HỌC</button>';
                            $temp++;
                        }
                    }
                    if ($temp == 0) {
                        echo '<form action="" method="post">
                        <input type="hidden" name="idkhoahoc" value="' . $data[0]['id'] . '">
                    <button type="submit" name="dangkykh"
                        class="Button_btn__RW1e2 Button_primary__86yfm CourseDetail_learnNow__A3hLp">ĐĂNG KÝ
                        HỌC</button>
                    </form>';
                    }
                    ?>

                    <ul>
                        <li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gauge-high"
                                class="svg-inline--fa fa-gauge-high CourseDetail_icon__sLJtd" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 64C238.3 64 224 78.33 224 96C224 113.7 238.3 128 256 128C273.7 128 288 113.7 288 96C288 78.33 273.7 64 256 64zM256 416C291.3 416 320 387.3 320 352C320 334.6 313.1 318.9 301.9 307.4L365.1 161.7C371.3 149.5 365.8 135.4 353.7 130C341.5 124.7 327.4 130.2 322 142.3L257.9 288C257.3 288 256.6 287.1 256 287.1C220.7 287.1 192 316.7 192 352C192 387.3 220.7 416 256 416V416zM144 112C126.3 112 112 126.3 112 144C112 161.7 126.3 176 144 176C161.7 176 176 161.7 176 144C176 126.3 161.7 112 144 112zM96 288C113.7 288 128 273.7 128 256C128 238.3 113.7 224 96 224C78.33 224 64 238.3 64 256C64 273.7 78.33 288 96 288zM416 224C398.3 224 384 238.3 384 256C384 273.7 398.3 288 416 288C433.7 288 448 273.7 448 256C448 238.3 433.7 224 416 224z">
                                </path>
                            </svg><span>Trình độ cơ bản</span></li>
                        <li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="film"
                                class="svg-inline--fa fa-film CourseDetail_icon__sLJtd" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M463.1 32h-416C21.49 32-.0001 53.49-.0001 80v352c0 26.51 21.49 48 47.1 48h416c26.51 0 48-21.49 48-48v-352C511.1 53.49 490.5 32 463.1 32zM111.1 408c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 408zM111.1 280c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM111.1 152c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 152zM351.1 400c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V400zM351.1 208c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V208zM463.1 408c0 4.418-3.582 8-8 8h-47.1c-4.418 0-7.1-3.582-7.1-8l0-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V408zM463.1 280c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM463.1 152c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8l0-48c0-4.418 3.582-8 7.1-8h47.1c4.418 0 8 3.582 8 8V152z">
                                </path>
                            </svg><span>Tổng số <strong><?php

                                                        echo '' . $data[1] . '';

                                                        ?></strong> bài học</span></li>
                        <li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock"
                                class="svg-inline--fa fa-clock CourseDetail_icon__sLJtd" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z">
                                </path>
                            </svg><span>Thời lượng <strong>10 giờ 29 phút</strong></span></li>
                        <li><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="battery-full"
                                class="svg-inline--fa fa-battery-full CourseDetail_icon__sLJtd" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M448 320H96V192H448V320zM0 176C0 131.8 35.82 96 80 96H464C508.2 96 544 131.8 544 176V192C561.7 192 576 206.3 576 224V288C576 305.7 561.7 320 544 320V336C544 380.2 508.2 416 464 416H80C35.82 416 0 380.2 0 336V176zM80 160C71.16 160 64 167.2 64 176V336C64 344.8 71.16 352 80 352H464C472.8 352 480 344.8 480 336V176C480 167.2 472.8 160 464 160H80z">
                                </path>
                            </svg><span>Học mọi lúc, mọi nơi</span></li>
                    </ul>
                </div>
            </section>
        </section>
    </section>
</div>
<style>
.index-module_fullWidth__3X-6x {
    width: 100%;
}

.index-module_grid__1q71E {
    padding: 0;
    margin: 0 auto;
}

.CourseDetail_wrapper__myy9O {
    margin-top: 24px;
    padding: 0 44px 68px;
}

.index-module_c-12__u7UXF {
    width: 100%;
}

.index-module_col__2EQm9 {
    padding-left: 4px;
    padding-right: 4px;
}

.index-module_row__-AHgh {
    display: flex;
    flex-wrap: wrap;
    margin-left: -4px;
    margin-right: -4px;
}

.CourseDetail_courseName__g37pH {
    font-size: 32px;
    font-weight: 700;
    margin-top: 16px;
    min-height: 33px;
}

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

.CourseDetail_textContent__Y2-aV {
    color: rgba(0, 0, 0, .8);
    font-size: 14px;
    line-height: 1.6;
}

.CourseDetail_purchaseBadge__CZ9PK {
    align-items: center;
    background: #fff;
    display: flex;
    flex-direction: column;
    margin-bottom: 60px;
    margin-left: 24px;
    padding-bottom: 20px;
    position: sticky;
    top: 90px;
}

.CourseDetail_imgPreview__qGZSi {
    border-radius: 16px;
    margin: 2px 0 20px;
    overflow: hidden;
    position: relative;
    user-select: none;
    width: calc(100% - 2px);
}

.CourseDetail_purchaseBadge__CZ9PK h5 {
    color: var(--primary-color);
    font-size: 32px;
    font-weight: 400;
    margin: 0 auto;
    opacity: .8;
}

.CourseDetail_imgPreview__qGZSi .CourseDetail_bg__Xacm8 {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: 100% auto;
    padding-top: 56.25%;
    width: 100%;
}

.CourseDetail_purchaseBadge__CZ9PK .CourseDetail_learnNow__A3hLp {
    font-size: 1.6rem;
    margin-top: 16px;
    min-width: 180px;
    padding: 10px 16px;
}

.Button_btn__RW1e2.Button_primary__86yfm {
    background-color: #0d6efd;
    color: white;
}

.Button_btn__RW1e_2.Button_primary__86yfm_2 {
    color: white;
}

.Button_primary__86yfm_2 {
    background-color: #4723D9;
}

.Button_btn__RW1e_2 {
    appearance: none;
    border: 1px solid #4723D9;
    border-radius: 999px !important;
    display: inline-block;
    font-weight: 600;
    outline: none;
    text-align: center;
    transition: .3s ease;
    user-select: none;
    white-space: nowrap;
}

.Button_btn__RW1e2 {
    appearance: none;
    border: 1px solid #0d6efd;
    border-radius: 999px !important;
    display: inline-block;
    font-weight: 600;
    outline: none;
    text-align: center;
    transition: .3s ease;
    user-select: none;
    white-space: nowrap;
}

button {
    border: none;
    box-shadow: none;
    display: block;
    outline: none;
    padding: 0;
}

button,
select {
    text-transform: none;
}

button,
input {
    overflow: visible;
}

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0;
}

.CourseDetail_purchaseBadge__CZ9PK ul {
    display: inline-block;
    margin: 0;
    padding: 24px 0 10px 4px;
    text-align: left;
}

ul {
    list-style-type: none;
}

.CourseDetail_purchaseBadge__CZ9PK ul li {
    color: #494949;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 10px;
    padding-left: 35px;
    position: relative;
}

.CourseDetail_purchaseBadge__CZ9PK ul li .CourseDetail_icon__sLJtd {
    left: 0;
    position: absolute;
    top: 4px;
}

.svg-inline--fa {
    display: inline-block;
    height: 1em;
    overflow: visible;
    vertical-align: -0.125em;
}

.index-module_row__-AHgh {
    display: flex;
    flex-wrap: wrap;
    margin-left: -4px;
    margin-right: -4px;
}

.CurriculumOfCourse_headerSticky__sUlkH {
    background-color: #fff;
    padding-bottom: 4px;
    position: -webkit-sticky;
    position: sticky;
    top: 66px;
    z-index: 2;
}

.CurriculumOfCourse_headerBlock__o0bme {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.CurriculumOfCourse_curriculumOfCourse__8Z1rQ h2 {
    font-size: 2rem;
    font-weight: 700;
}

.CurriculumOfCourse_floatLeft__zxBeB {
    float: left;
}

.CurriculumOfCourse_subHeadWrapper__Hkcns {
    display: flex;
    font-size: 1.4rem;
    margin-top: 4px;
}

@media (max-width: 1600px) {
    .index-module_row__-AHgh {
        margin-left: -12px;
        margin-right: -12px;
    }
}

@media (max-width: 1000px) {
    .index-module_row__-AHgh {
        margin-left: -8px;
        margin-right: -8px;
    }
}

@media (max-width: 1600px) {
    .index-module_row__-AHgh {
        margin-left: -12px;
        margin-right: -12px;
    }
}

@media (max-width: 1600px) {
    .index-module_l-8__yebHm {
        width: 66.66667%;
    }
}

@media (max-width: 1600px) {
    .index-module_col__2EQm9 {
        padding-left: 12px;
        padding-right: 12px;
    }
}

@media (max-width: 1600px) {
    .index-module_l-4__3tf5p {
        width: 33.33333%;
    }
}

@media (max-width: 1000px) {
    .index-module_row__-AHgh {
        margin-left: -8px;
        margin-right: -8px;
    }
}

@media (max-width: 1000px) {
    .index-module_m-12__2CxUL {
        width: 100%;
    }
}

@media (max-width: 1000px) {
    .index-module_col__2EQm9 {
        padding-left: 8px;
        padding-right: 8px;
    }
}
</style>