z<div class="App_withSidebarContent__o4VlQ">
    <div class="mb-4" style="margin: 0 40px;">
        <h1 class="DefaultLayout_heading__AvBHu">Khóa học</h1>
        <div class="MarkdownParser_wrapper__JYN63 DefaultLayout_desc__rr0iE">
            <p>Các khóa học được thiết kế theo thứ tự giúp người mới dễ dàng tiếp cận. Tất cả các khóa học đều miễn phí,
                chất lượng và nội dung dễ hiểu.</p>
        </div>
    </div>
    <div class="ScrollList_vertical__hG0sb">
        <div>
            <div class="ScrollList_heading-wrap__58LQx">
                <h2 class="ScrollList_heading__BYEXH"><a rel="noreferrer" target="_self"
                        href="<?php echo base_url; ?>khoahoc">Khóa học back end</a></h2>
            </div>
        </div>
        <div class="ScrollList_body__iMN-l">
            <section class="index-module_row__-AHgh">
                <?php
                foreach ($data as $key => $value) {
                    if ($value['loaikh'] == "Back-end") {
                ?>
                <section
                    class="index-module_col__2EQm9 index-module_c-12__u7UXF index-module_m-4__30Uoi index-module_l-3__MjWvb">
                    <div class="CommonItem_wrapper__1FbHi Home_courseItem__aIeZ4"><a
                            class="CommonItem_thumb__ew8Jj CommonItem_has-link__VLLrX" title="Kiến Thức Nhập Môn IT"
                            target="_self" href="<?php echo base_url; ?>ttkhoahoc/<?php echo $value['id'] ?>"
                            style="background-image: url(&quot;<?php echo $value['img'] ?>&quot;);  "></a>
                        <h3 class="CommonItem_title__EpYrE"><a target="_self"
                                href="<?php echo base_url; ?>ttkhoahoc/<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                        </h3>
                        <div class="CourseItem_students-count__92kIg"><svg aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users " role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z">
                                </path>
                            </svg><span><?php echo $value['view'] ?></span></div>
                    </div>
                </section>
                <?php }
                } ?>
            </section>
        </div>
    </div>

    <div class="ScrollList_vertical__hG0sb">
        <div>
            <div class="ScrollList_heading-wrap__58LQx">
                <h2 class="ScrollList_heading__BYEXH"><a rel="noreferrer" target="_self"
                        href="<?php echo base_url; ?>khoahoc">Khóa học font end</a></h2>
            </div>
        </div>
        <div class="ScrollList_body__iMN-l">
            <section class="index-module_row__-AHgh">
                <?php
                foreach ($data as $key => $value) {
                    if ($value['loaikh'] == "Font-end") {
                ?>
                <section
                    class="index-module_col__2EQm9 index-module_c-12__u7UXF index-module_m-4__30Uoi index-module_l-3__MjWvb">
                    <div class="CommonItem_wrapper__1FbHi Home_courseItem__aIeZ4"><a
                            class="CommonItem_thumb__ew8Jj CommonItem_has-link__VLLrX" title="Kiến Thức Nhập Môn IT"
                            target="_self" href="<?php echo base_url; ?>ttkhoahoc/<?php echo $value['id'] ?>"
                            style="background-image: url(&quot;<?php echo $value['img'] ?>&quot;);  background-size: contain, cover"></a>
                        <h3 class="CommonItem_title__EpYrE"><a target="_self"
                                href="<?php echo base_url; ?>ttkhoahoc/<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a>
                        </h3>
                        <div class="CourseItem_students-count__92kIg"><svg aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users " role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z">
                                </path>
                            </svg><span><?php echo $value['view'] ?></span></div>
                    </div>
                </section>
                <?php }
                } ?>
            </section>
        </div>
    </div>
</div>
<style>
.DefaultLayout_heading__AvBHu {
    color: #242424;
    font-size: 28px;
    font-weight: 900;
}

h1 {
    font-size: 20px;
    margin: 0.67em 0;
}

.MarkdownParser_wrapper__JYN63 {
    color: #292929;
    font-size: 18px;
    line-height: 2;

}

.MarkdownParser_wrapper__JYN63 p {
    margin: 6px 0;
}

.ScrollList_vertical__hG0sb {
    margin: 0 40px;
}

.ScrollList_heading-wrap__58LQx {
    align-items: baseline;
    display: flex;
}

.ScrollList_heading__BYEXH {
    color: #242424;
    font-size: 24px;
    font-weight: 900;
    margin-right: auto;
    margin-top: 16px;
}

.ScrollList_heading__BYEXH a {
    color: #000;
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



.index-module_c-12__u7UXF {
    width: 100%;
}

.index-module_col__2EQm9 {
    padding-left: 4px;
    padding-right: 4px;
}

.Home_courseItem__aIeZ4 {
    overflow: unset;
    position: relative;
}

.CommonItem_wrapper__1FbHi {
    flex-shrink: 0;
    margin-bottom: 32px;
    overflow: hidden;
}

.CommonItem_thumb__ew8Jj {
    background-color: rgba(0, 0, 0, .1);
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 16px;
    display: block;
    object-fit: cover;
    overflow: hidden;
    padding-top: 56.25%;
    position: relative;
    width: 100%;
}

.CommonItem_title__EpYrE a,
.CommonItem_title__EpYrE span {
    word-wrap: break-word;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 1;
    color: #292929;
    font-size: 16px;
    line-height: 1.4;
    overflow: hidden;
}

.CourseItem_students-count__92kIg {
    color: #666;
    font-size: 14px;
}

.CourseItem_students-count__92kIg span {
    margin-left: 8px;
}


@media (min-width: 1113px) {
    .index-module_l-3__MjWvb {
        width: 25%;
    }
}

@media (min-width: 1113px) {
    .index-module_col__2EQm9 {
        padding-left: 12px;
        padding-right: 12px;
    }
}

@media (min-width: 740px) {
    .index-module_m-4__30Uoi {
        width: 33.33333%;
    }
}

@media (min-width: 740px) {
    .index-module_col__2EQm9 {
        padding-left: 8px;
        padding-right: 8px;
    }
}
</style>